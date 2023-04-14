var URLROOT = `http://localhost/Meowpaws/`;

var userTbody = document.getElementById("itemTbody");

// vérifier si id_user est indéfini ou nul
if (!id_user || id_user === "null" || id_user === "undefined") {
  location.replace(`${URLROOT}admin`);
} else {
  fetch("http://localhost/meowpaws/backend/Admins/Items", {
    method: "GET",
    headers: {
      "Content-Type": "application/json"
    }
  })
    .then((res) => res.json())
    .then((data) => {
      if (data.message == "Items Info") {
        var result = data.result;
        console.log(result);
        var tr = ``
        for (let i = 0; i < result.length; i++) {
          tr += `<tr id="${result[i].id_p}">
          <td>
              <img src="${URLROOT}layout/image/products/${result[i].imagePricipal}" class="imageReview">
          </td>
          <td>${result[i].pname}</td>
          <td>$${result[i].price}</td>
          <td>${result[i].description}</td>
          <td>${result[i].cname}</td>
          <td>
              <div class="actionDiv">
                  <span title="delete" class="action delete" onclick="deleteItem(${result[i].id_p})">
                      <i class="fa fa-close"></i>
                  </span>
                  <span title="edit" class="action edit">
                      <a href="${URLROOT}admin/editItem?id_p=${result[i].id_p}" onclick = "checkClickProductEdit()">
                          <i class="fa fa-edit"></i>
                      </a>
                  </span>
              </div>
          </td>
      </tr>`;
        }
        userTbody.innerHTML = tr;
      } else {
        location.replace(`${URLROOT}admin/items`);
      }
    });
    
function deleteItem(id) {
  console.log(id);
  fetch(`http://localhost/meowpaws/backend/Admins/deleteItem/${id}`, {
    method: "GET",
    headers: {
      "Content-Type": "application/json"
    }
  })
    .then((res) => res.json())
    .then((data) => {
      console.log(data);
      if (data.message == "Item Deleted") {
        location.replace(`${URLROOT}admin/Items`);
      }else{
        location.replace(`${URLROOT}admin/Items`);
      }
    });
  }
}
function checkClickProductEdit() {
  localStorage.setItem('checkClickProductEdit',1)
}