document.addEventListener("DOMContentLoaded", function() {
  "use strict";

  // Dashboard
  var toggleInfos = document.querySelectorAll(".toggle-info");
  for (var i = 0; i < toggleInfos.length; i++) {
    toggleInfos[i].addEventListener("click", function() {
      this.classList.toggle("selected");
      var panelGlobal = this.closest(".col-sm-6.box_shadow_latest");
      var panelBody = this.parentNode.nextElementSibling;
      if (this.classList.contains("selected")) {
        panelBody.style.display = "none";
        panelGlobal.style.height = "24px";
        this.innerHTML = '<i class="fa fa-minus fa-lg"></i>';
      } else {
        panelBody.style.display = "block";
        panelGlobal.style.height = "auto";
        this.innerHTML = '<i class="fa fa-plus fa-lg"></i>';
      }
    });
  }
});

const itemsTotal = document.getElementById("itemsTotal");
const categoriesTotal = document.getElementById("categoriesTotal");
const usersTotal = document.getElementById("usersTotal");

const items_latest = document.getElementById("items_latest");
const users_latest = document.getElementById("users_latest");
const categories_latest = document.getElementById("categories_latest");
const comments_latest = document.getElementById("comments_latest");

if (!id_user || id_user === "null" || id_user === "undefined") {
  location.replace(`${URLROOT}admin`);
} else {
  fetch("http://localhost/meowpaws/backend/Admins/Statistic", {
    method: "GET",
    headers: {
      "Content-Type": "application/json"
    }
  })
    .then(res => res.json())
    .then(data => {
      if (data.message == "Statistic Isset") {
        var items = data.result.itemsTotal;
        if (items == false) {
          items = 0
        }
        var users = data.result.usersTotal;
        if (users == false) {
          users = 0
        }
        var categories = data.result.categoriesTotal;
        if (categories == false) {
          categories = 0
        }

        itemsTotal.textContent = items;
        usersTotal.textContent = users;
        categoriesTotal.textContent = categories;
      }
    });
  fetch("http://localhost/meowpaws/backend/Admins/Latest", {
    method: "GET",
    headers: {
      "Content-Type": "application/json"
    }
  })
    .then(res => res.json())
    .then(data => {
      if (data.message == "Latest Isset") {
        var items = data.result.itemsLatest;
        var users = data.result.usersLatest;
        var categories = data.result.categoriesLatest;
        var comments = data.result.commentsLatest;

        var liItems = ``;
        for (let i = 0; i < items.length; i++) {
          liItems += `<li>
                        ${items[i].pname}
                        <a href="${URLROOT}admin/editItem?id_p=${items[i].id_p}">
                            <span class="btn btn-success pull-right">
                                <i class="fa fa-edit"></i> Edit
                            </span>
                        </a>
                      </li>`;
        }
        items_latest.innerHTML = liItems;
        

        var liUsers = ``;
        for (let i = 0; i < users.length; i++) {
          liUsers += `<li>
                        ${users[i].username}
                        <a href="${URLROOT}admin/editUser?id_u=${users[i].id_u}">
                            <span class="btn btn-success pull-right">
                                <i class="fa fa-edit"></i> Edit
                            </span>
                        </a>
                      </li>`;
        }
        users_latest.innerHTML = liUsers;
        

        var liCategories = ``;
        for (let i = 0; i < categories.length; i++) {
          liCategories += `<li>
                        ${categories[i].cname}
                        <a href="${URLROOT}admin/editCategory?id_p=${categories[i].id_c}">
                            <span class="btn btn-success pull-right">
                                <i class="fa fa-edit"></i> Edit
                            </span>
                        </a>
                      </li>`;
        }
        categories_latest.innerHTML = liCategories;

        var divComments = ``;
        for (let i = 0; i < comments.length; i++) {
          console.log(comments);
          divComments += `<div class="comment-box">
                            <span class="member-n">
                              <a href="${URLROOT}admin/ShowUser?id_u=${comments[i].id_u}">
                                ${comments[i].username}
                              </a>
                            </span>
                            <p class="member-c">${comments[i].comment}</p>
                          </div>`;
        }
        comments_latest.innerHTML = divComments;
      }
    });
}
