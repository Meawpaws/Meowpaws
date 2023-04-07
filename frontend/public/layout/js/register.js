var login = document.getElementById('register')
var email = document.getElementById('email')
var password = document.getElementById('password')
var nameUser = document.getElementById('namz')
var errorEmail = document.getElementById('error_email')
var errorPassword = document.getElementById('error_password')
var errorName = document.getElementById('error_name')
login.addEventListener('submit', (event) => {
    const formData = new FormData(login);
    const data = Object.fromEntries(formData);
    var error_Email = ''
    errorEmail.innerHTML = error_Email
    email.classList += 'form-control form-control-lg'
    var error_Password = ''
    errorPassword.innerHTML = error_Password
    password.classList += 'form-control form-control-lg'
    var error_Name = ''
    errorName.innerHTML = error_Name
    password.classList += 'form-control form-control-lg'
    
    if (data.email == ' ' || !data.email) {
        error_Email = 'Empty Email'
        errorEmail.innerHTML = error_Email
        email.classList += 'form-control form-control-lg is-invalid'
    }
    if (data.password == ' ' || !data.password) {
        error_Password = 'Empty Password'
        errorPassword.innerHTML = error_Password
        password.classList += 'form-control form-control-lg is-invalid'
    }
    if (data.name == ' ' || !data.password) {
        error_Name = 'Empty Nameerror_Name'
        errorName.innerHTML = error_Name
        nameUser.classList += 'form-control form-control-lg is-invalid'
    }
    event.preventDefault()
    if ((error_Password == ' ' || !error_Password) && (error_Email || !error_Email) && (error_Name || !error_Name)) {
      fetch("http://localhost/meowpaws/backend/Users/login", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(data),
      })
      console.log(data)
        .then((res) => res.json())
        .then((data) => {
          console.log(data);
          if (data.message == "Account Susses") {
            localStorage.setItem("ID_USER",data.result.id_u);
            location.replace(URLROOT);
          } else {
            location.replace(`${URLROOT}users/login`);
          }
        });
    } else {
      location.replace(`${URLROOT}users/login`);
    }
})