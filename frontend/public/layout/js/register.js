var login = document.getElementById("register");
var email = document.getElementById("email");
var password = document.getElementById("password");
var nameUser = document.getElementById("name");
var errorEmail = document.getElementById("error_email");
var errorPassword = document.getElementById("error_password");
var errorName = document.getElementById("error_name");

var URLROOT = `http://localhost/Meowpaws/`;
var error_Name;
var error_Password;
var error_Email;

login.addEventListener("submit", (event) => {
  event.preventDefault();
  const formData = new FormData(login);
  const data = Object.fromEntries(formData);
  if (data.email != " ") {
    error_Email = "";
    errorEmail.innerHTML = error_Email;
    email.classList += "form-control form-control-lg";
  }
  if (data.password != " ") {
    error_Password = "";
    errorPassword.innerHTML = error_Password;
    password.classList += "form-control form-control-lg";
  }
  if (data.username != " ") {
    error_Name = "";
    errorName.innerHTML = error_Name;
    password.classList += "form-control form-control-lg";
  }
  if (data.email == " " || !data.email) {
    error_Email = "Empty Email";
    errorEmail.innerHTML = error_Email;
    email.classList += "form-control form-control-lg is-invalid";
  }
  if (data.password == " " || !data.password) {
    error_Password = "Empty Password";
    errorPassword.innerHTML = error_Password;
    password.classList += "form-control form-control-lg is-invalid";
  }
  if (data.username == " " || !data.username) {
    error_Name = "Empty Name";
    errorName.innerHTML = error_Name;
    nameUser.classList += "form-control form-control-lg is-invalid";
  }
  if ((error_Password == ' ' || !error_Password) && (error_Email || !error_Email) && (error_Name || !error_Name)) {
    fetch("http://localhost/meowpaws/backend/Users/register", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data),
    })
      .then((res) => res.json())
      .then((data) => {
        console.log(data);
        if (data.message == "Account Added") {
          location.replace(`${URLROOT}users/login`);
        } else {
          location.replace(`${URLROOT}users/register`);
        }
      });
  }
});
/*


  
*/
