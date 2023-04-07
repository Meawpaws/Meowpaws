var login = document.getElementById('login')
var email = document.getElementById('email')
var password = document.getElementById('password')
var errorEmail = document.getElementById('errorEmail')
var errorPassword = document.getElementById('errorPassword')
login.addEventListener('submit', (event) => {
    event.preventDefault()
    const formData = new FormData(login);
    const data = Object.fromEntries(formData);

    if (data.email == ' ' || !data.email) {
        var error_Email = 'Empty Email'
        errorEmail.innerHTML = error_Email
        email.classList += 'form-control form-control-lg is-invalid'
    }
    if (data.password == ' ' || !data.password) {
        var error_Password = 'Empty Password'
        errorPassword.innerHTML = error_Password
        password.classList += 'form-control form-control-lg is-invalid'
    }
    console.log(error_Email);
})