(function () {
  ("use strict");
  const forms = document.querySelectorAll(".requires-validation");
  Array.from(forms).forEach(function (form) {
    form.addEventListener(
      "click",
      function (event) {
        localStorage.setItem("checkClickUserEdit", 0);
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();

const form = document.getElementById("editUser");

const idKeyValue = window.location.search;
const idParam = new URLSearchParams(idKeyValue);
const id = idParam.get("id_u");

const checkClickUserEdit = localStorage.getItem("checkClickUserEdit");

if (checkClickUserEdit != 1) {
  location.replace(`${URLROOT}admin/users`);
} else {
  fetch(`http://localhost/meowpaws/backend/Admins/User/${id}`, {
    method: "GET",
    headers: {
      "Content-Type": "application/json"
    }
  })
    .then((res) => res.json())
    .then((data) => {
      var result = data.result;
      var inputs = `<div class="col-md-12">
                        <input class="form-control" type="text" name="name" readonly value="${result.name}" placeholder="Name" required>
                        <div class="valid-feedback">Name is valid!</div>
                        <div class="invalid-feedback">Name cannot be blank!</div>
                    </div>
    
                    <div class="col-md-12">
                        <input class="form-control" type="text" name="prenom" readonly value="${result.prenom}" placeholder="Prenom" required>
                        <div class="valid-feedback">Prenom is valid!</div>
                        <div class="invalid-feedback">Prenom cannot be blank!</div>
                    </div>
    
                    <div class="col-md-12">
                        <input class="form-control" type="text" readonly name="username" readonly value="${result.username}" placeholder="Username" required>
                        <div class="valid-feedback">Username is valid!</div>
                        <div class="invalid-feedback">Username cannot be blank!</div>
                    </div>
    
                    <div class="col-md-12">
                        <input class="form-control" readonly type="email" name="email" readonly value="${result.email}" placeholder="E-mail" required>
                        <div class="valid-feedback">Email field is valid!</div>
                        <div class="invalid-feedback">Email field cannot be blank!</div>
                    </div>
    
                    <div class="col-md-12">
                        <input class="form-control" type="text" name="number" readonly value="${result.number}" placeholder="Number" required>
                        <div class="valid-feedback">Number field is valid!</div>
                        <div class="invalid-feedback">Number field cannot be blank!</div>
                    </div>
    
                    <div class="col-md-12">
                        <input class="form-control" type="text" name="adress" readonly value="${result.adress}" placeholder="Adress" required>
                        <div class="valid-feedback">Adress field is valid!</div>
                        <div class="invalid-feedback">Adress field cannot be blank!</div>
                    </div>
    
                    <div class="col-md-12">
                        <input class="form-control" type="text" name="postCode" readonly value="${result.postcode}" placeholder="PostCode" required>
                        <div class="valid-feedback">PostCode field is valid!</div>
                        <div class="invalid-feedback">PostCode field cannot be blank!</div>
                    </div>
    
                    <div class="col-md-12">
                        <input class="form-control" type="text" name="state" readonly value="${result.State}" placeholder="State" required>
                        <div class="valid-feedback">State field is valid!</div>
                        <div class="invalid-feedback">State field cannot be blank!</div>
                    </div>
    
                    <div class="col-md-12">
                        <input class="form-control" type="text" name="country" readonly value="${result.Country}" placeholder="Country" required>
                        <div class="valid-feedback">Country field is valid!</div>
                        <div class="invalid-feedback">Country field cannot be blank!</div>
                    </div>
    
                    <div class="col-md-12">
                        <input class="form-control" type="text" name="country" readonly id="roleName" placeholder="Role" required>
                        <div class="valid-feedback">Role field is valid!</div>
                        <div class="invalid-feedback">Role field cannot be blank!</div>
                    </div>`;
      form.innerHTML = inputs;
      // Get the select element
      var roleName = document.getElementById("roleName");

      if (result.role == 1) {
        var Role = 'Admin'
      }
      if (result.role == 0) {
        var Role = 'User'
      }
      roleName.setAttribute('value',Role)
    });
}
