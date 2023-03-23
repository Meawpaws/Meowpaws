var form = document.querySelector('.formContact')
var URLROOT = `http://localhost/Meowpaws/`
form.addEventListener('submit', event => {
    event.preventDefault();
    const formData = new FormData(form);
    const data = Object.fromEntries(formData);

    fetch('http://localhost/meowpaws/backend/Contacts/Insert', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    }).then(res => res.json())
        .then(data => {
            console.log(data.message);
            if (data.message == "Message Send") {
                location.replace(URLROOT);
            } else {
                location.replace(`${URLROOT}pages/contact`);
            }
        })
});