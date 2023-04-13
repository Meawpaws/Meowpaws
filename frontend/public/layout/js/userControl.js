var userTbody = document.getElementById("userTbody");

// vérifier si id_user est indéfini ou nul
if (!id_user || id_user === "null" || id_user === "undefined") {
  location.replace(`${URLROOT}admin`);
} else {
  fetch("http://localhost/meowpaws/backend/Admins/Users", {
    method: "GET",
    headers: {
      "Content-Type": "application/json"
    }
  })
    .then((res) => res.json())
    .then((data) => {
      if (data.message == "Users Info") {
        var result = data.result;
        console.log(result);
        var tr = ``;
        for (let i = 0; i < result.length; i++) {
          if (result[i].role == 1) {
            var role = "admin";
          }
          if (result[i].role == 0) {
            var role = "user";
          }
          tr += `<tr id = "${result[i].id_u}">
                        <td>${result[i].name} ${result[i].prenom}</td>
                        <td>${result[i].username}</td>
                        <td>${result[i].email}</td>
                        <td>${result[i].number}</td>
                        <td>${result[i].adress}</td>
                        <td>${result[i].postcode}</td>
                        <td>${result[i].State}</td>
                        <td>${result[i].Country}</td>
                        <td>${result[i].added_at}</td>
                        <td>`;
          if (result[i].role == 0) {
            tr += `<div class ="actionDiv">
            <span title="delete" class="action delete" onclick="deleteUser(${result[i].id_u})">
                            <i class="fa fa-close"></i>
                          </span>
                          <span title="edit" class="action edit">
                              <a href = "${URLROOT}admin/editUser?id_u=${result[i].id_u}" onclick = "checkClickUserEdit()">
                                <i class="fa fa-edit"></i>
                              </a>
                            </span>
                            <span title="change role" class="action Role" onclick="changeRole(${result[i].id_u})">
                              <img src="${URLROOT}layout/image/siteWebPages/userRole.svg" alt="avatar">
                            </span>
                            </div>`;
          } else {
            tr += `You Can't`;
          }
          tr += `</td>
                      </tr>`;
          userTbody.innerHTML = tr;
        }
      } else {
        location.replace(`${URLROOT}admin/users`);
      }
    });
}
function deleteUser(id) {
  console.log(id);
  fetch(`http://localhost/meowpaws/backend/Admins/delete/${id}`, {
    method: "GET",
    headers: {
      "Content-Type": "application/json"
    }
  })
    .then((res) => res.json())
    .then((data) => {
      if (data.message == "Users Deleted") {
        location.replace(`${URLROOT}admin/users`);
      }
      if (data.message == "Users Not Deleted") {
        location.replace(`${URLROOT}admin/users`);
      }
    });
}
function changeRole(id) {
  console.log(id);
  fetch(`http://localhost/meowpaws/backend/Admins/ChangeRole/${id}`, {
    method: "GET",
    headers: {
      "Content-Type": "application/json"
    }
  })
    .then((res) => res.json())
    .then((data) => {
      if (data.message == "Role Changed") {
        location.replace(`${URLROOT}admin/users`);
      }
      if (data.message == "Role Not Changed") {
        location.replace(`${URLROOT}admin/users`);
      }
    });
}
function checkClickUserEdit() {
  localStorage.setItem('checkClickUserEdit',1)
}