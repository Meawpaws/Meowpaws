const id_user = localStorage.getItem("ID_USER");
const role_user = localStorage.getItem("ROLE_USER");

const ulNavbarUser = document.getElementById("ulNavbarUser");
var URLROOT = `http://localhost/Meowpaws/`

var liNavbarUser

if (ulNavbarUser) {
    if (!id_user || id_user === "null" || id_user === "undefined") {
        liNavbarUser = `
                        <li><a class="dropdown-item" href="${URLROOT}users/login">LOGIN</a></li>
                        <li><a class="dropdown-item" href="${URLROOT}users/register">SIGNUP</a></li>
                        `
    } else {
        console.log(role_user);
        if (role_user == 1) {
            liNavbarUser = `
                            <li><a class="dropdown-item" href="${URLROOT}admin">GO TO ADMIN</a></li>
                            <li><a class="dropdown-item" href="${URLROOT}users/profile">PROFILE</a></li>
                            <li><a class="dropdown-item" href="${URLROOT}users/logout">LOGOUT</a></li>
                            `
        } else {
            liNavbarUser = `
                            <li><a class="dropdown-item" href="${URLROOT}users/profile">PROFILE</a></li>
                            <li><a class="dropdown-item" href="${URLROOT}users/logout">LOGOUT</a></li>
                            `
        }
    }
    ulNavbarUser.innerHTML=liNavbarUser
}
