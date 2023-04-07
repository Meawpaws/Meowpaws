var login = document.getElementById('login')
var email = document.getElementById('email')
var password = document.getElementById('password')
var errorEmail = document.getElementById('errorEmail')
var errorPassword = document.getElementById('errorPassword')

var URLROOT = `http://localhost/Meowpaws/`

login.addEventListener('submit', (event) => {
    const formData = new FormData(login);
    const data = Object.fromEntries(formData);
    var error_Email = ''
    errorEmail.innerHTML = error_Email
    email.classList += 'form-control form-control-lg'
    var error_Password = ''
    errorPassword.innerHTML = error_Password
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
    event.preventDefault()
    if ((error_Password == ' ' || !error_Password) && (error_Email || !error_Email)) {
      fetch('http://localhost/meowpaws/backend/Users/login', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    }).then(res => res.json())
        .then(data => {
            console.log(data.message);
            if (data.message == "Account Susses") {
              localStorage.setItem("ID_USER",data.result.id_u);
              location.replace(URLROOT);
            } else {
                location.replace(`${URLROOT}users/login`);
            }
        })
    }
})

