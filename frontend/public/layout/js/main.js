const id_user = localStorage.getItem("ID_USER");

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
        liNavbarUser = `
                        <li><a class="dropdown-item" href="${URLROOT}users/profile">PROFILE</a></li>
                        <li><a class="dropdown-item" href="${URLROOT}users/logout">LOGOUT</a></li>
                        `
    }
    ulNavbarUser.innerHTML=liNavbarUser
}
