const id_user = localStorage.getItem("ID_USER");
const ulNavbarAdmin = document.getElementById("ulNavbarAdmin");
const ulNavbarUser = document.getElementById("ulNavbarUser");
var URLROOT = `http://localhost/Meowpaws/`
var liNavbarAdmin
var liNavbarUser
if (ulNavbarAdmin) {
    if (!id_user || id_user === "null" || id_user === "undefined") {
        liNavbarAdmin = `
                        <li><a class="dropdown-item" href="${URLROOT}admin">LOGIN</a></li>
                        <li><a class="dropdown-item" href="${URLROOT}admin/register">SIGNUP</a></li>
                        `
    } else {
        liNavbarAdmin = `
                        <li><a class="dropdown-item" href="${URLROOT}users/logout">LOGOUT</a></li>
                        `
    }
    ulNavbarAdmin.innerHTML=liNavbarAdmin
}
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
