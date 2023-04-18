const avatar = document.getElementById("avatar");
const inputAvatar = document.getElementById("inputAvatar");
const saveAvatar = document.getElementById("saveAvatar");
const formAvatar = document.getElementById("formAvatar");
const username = document.getElementById("username");
const email = document.getElementById("email");
const EditProfile = document.getElementById("EditProfile");
const profileDelete = document.getElementById("profileDelete");

var URLROOT_IMAGE = `http://localhost/Meowpaws/layout/image/profile/`;
var URLROOT = `http://localhost/Meowpaws/`;
fetch(`http://localhost/meowpaws/backend/Users/Info/${id_user}`, {
  method: "GET",
  headers: {
    "Content-Type": "application/json"
  }
})
  .then(res => res.json())
  .then(data => {
    var result = data.result;
    avatar.setAttribute("src", `${URLROOT_IMAGE}${result.avatar_user}`);
    username.innerText = result.username;
    email.innerText = result.email;

    var formEditeProfile = `<div class="row mt-2">
                                <div class="col-md-6">
                                    <label class="labels">Name</label>
                                    <input required type="text" class="form-control" value = "${result.name}" name="name" placeholder="first name">
                                </div>
                                <div class="col-md-6">
                                    <label class="labels">Surname</label>
                                    <input required type="text" class="form-control" value ="${result.prenom}" name="prenom" placeholder="surname">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label class="labels">Mobile Number</label>
                                    <input required type="number" class="form-control" value = "${result.number}" name="number" placeholder="enter phone number">
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">Address</label>
                                    <input required type="text" class="form-control" value = "${result.adress}" name="adress" placeholder="enter address line">
                                </div>
                                <div class="col-md-12">
                                        <label class="labels">Postcode</label>
                                    <input required type="text" class="form-control" value = "${result.postcode}" name="postCode" placeholder="enter PostCode">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label class="labels">Country</label>
                                    <input required type="text" class="form-control" value = "${result.Country}" name="country" placeholder="country">
                                </div>
                                <div class="col-md-6">
                                    <label class="labels">State/Region</label>
                                    <input required type="text" class="form-control" value= "${result.State}" name="state" placeholder="state">
                                </div>
                            </div>
                            <div class="mt-5 text-center">
                                <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                            </div>`;
    EditProfile.innerHTML = formEditeProfile;

    var btnProfileDelete = `<span>Delete Account</span>
                                <span class="border px-3 p-1 add-experience" onclick="deleteProfile(${result.id_u})">
                                    <i class="fa fa-close"></i>&nbsp;Delete
                                </span>`;
    profileDelete.innerHTML = btnProfileDelete;
  });

avatar.addEventListener("click", () => {
  inputAvatar.click();
  inputAvatar.addEventListener("input", () => {
    saveAvatar.click();
  });
  formAvatar.addEventListener("submit", event => {
    event.preventDefault();
    const formData = new FormData(formAvatar);
    const data = Object.fromEntries(formData);
    var image = formData.get("file");
    image = image.name;
    delete data.file;
    data.file = image;
    fetch(`http://localhost/meowpaws/backend/Users/UpdateImage/${id_user}`, {
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify(data)
    })
      .then(res => res.json())
      .then(data => {
        avatar.setAttribute("src", `${URLROOT_IMAGE}${image}`);
      });
  });
});

EditProfile.addEventListener("submit", event => {
  event.preventDefault();
  const formData = new FormData(EditProfile);
  const data = Object.fromEntries(formData);

  fetch(`http://localhost/meowpaws/backend/Users/UpdateUser/${id_user}`, {
    method: "PUT",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify(data)
  })
    .then(res => res.json())
    .then(data => {
      if (data.message == "Account Updated") {
        location.replace(`${URLROOT}`);
      } else {
        location.replace(`${URLROOT}users/profile`);
      }
    });
});

function deleteProfile(id) {
  fetch(`http://localhost/meowpaws/backend/Users/Delete/${id}`, {
    method: "GET",
    headers: {
      "Content-Type": "application/json"
    }
  })
    .then(res => res.json())
    .then(data => {
      if (data.message == "Account Deleted") {
        location.replace(`${URLROOT}users/logout`);
      } else {
        location.replace(`${URLROOT}users/profile`);
      }
    });
}
