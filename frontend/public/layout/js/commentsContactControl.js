const commentsContactDiv = document.getElementById('commentsContactDiv')

const commentsBtn = document.getElementById('commentsBtn')
const contactBtn = document.getElementById('contactBtn')

fetch("http://localhost/meowpaws/backend/Admins/Comments", {
    method: "GET",
    headers: {
      "Content-Type": "application/json"
    }
  })
    .then((res) => res.json())
    .then((data) => {
        var result = data.result;
        console.log(result);
        var tr =   `<table class="fl-table">
                        <thead>
                            <tr>
                                <th>Id User</th>
                                <th>Id Product</th>
                                <th>Comment</th>
                                <th>Stars</th>
                            </tr>
                        </thead>
                        <tbody>`;
        for (let i = 0; i < result.length; i++) {
          tr += `<tr>
                    <td><a href = "http://localhost/Meowpaws/admin/users">${result[i].id_u}</a></td>
                    <td><a href = "http://localhost/Meowpaws/pages/view?id=${result[i].id_p}">${result[i].id_p}</a></td>
                    <td>${result[i].comment}</td>
                    <td>${result[i].star}</td>
                  </tr>`;
        }
        tr += `<tbody>
        </table>`
        commentsContactDiv.innerHTML = tr;
    })

commentsBtn.addEventListener('click',()=>{
  fetch("http://localhost/meowpaws/backend/Admins/Comments", {
    method: "GET",
    headers: {
      "Content-Type": "application/json"
    }
  })
    .then((res) => res.json())
    .then((data) => {
        var result = data.result;
        console.log(result);
        var tr =   `<table class="fl-table">
                        <thead>
                            <tr>
                                <th>Id User</th>
                                <th>Id Product</th>
                                <th>Comment</th>
                                <th>Stars</th>
                            </tr>
                        </thead>
                        <tbody>`;
        for (let i = 0; i < result.length; i++) {
          tr += `<tr>
                    <td><a href = "http://localhost/Meowpaws/admin/users">${result[i].id_u}</a></td>
                    <td><a href = "http://localhost/Meowpaws/pages/view?id=${result[i].id_p}">${result[i].id_p}</a></td>
                    <td>${result[i].comment}</td>
                    <td>${result[i].star}</td>
                  </tr>`;
        }
        tr += `<tbody>
        </table>`
        commentsContactDiv.innerHTML = tr;
    })
    
})
contactBtn.addEventListener('click',()=>{
  fetch("http://localhost/meowpaws/backend/Admins/Contacts", {
    method: "GET",
    headers: {
      "Content-Type": "application/json"
    }
  })
    .then((res) => res.json())
    .then((data) => {
        var result = data.result;
        console.log(result);
        var tr =   `<table class="fl-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Telephone</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>`;
        for (let i = 0; i < result.length; i++) {
          tr += `<tr>
                    <td>${result[i].name}</td>
                    <td>${result[i].email}</td>
                    <td>${result[i].telephone}</td>
                    <td>${result[i].message}</td>
                  </tr>`;
        }
        tr += `<tbody>
        </table>`
        commentsContactDiv.innerHTML = tr;
    })
})