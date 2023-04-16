var categoryTbody = document.getElementById("categoryTbody");

// vérifier si id_user est indéfini ou nul
if (!id_user || id_user === "null" || id_user === "undefined") {
  location.replace(`${URLROOT}admin`);
} else {
  fetch("http://localhost/meowpaws/backend/Admins/getCategories", {
    method: "GET",
    headers: {
      "Content-Type": "application/json"
    }
  })
    .then((res) => res.json())
    .then((data) => {
      if (data.message == "Categories Isset") {
        var result = data.result;
        console.log(result);
        var tr = ``;
        for (let i = 0; i < result.length; i++) {
          tr += `<tr id="${result[i].id_c}">
          <td>${result[i].cname}</td>
          <td>${result[i].Description}</td>`
          if (result[i].id_c == 1 || result[i].id_c == 2 || result[i].id_c == 3) {
            tr += `<td>You Can't Because Is Principal Category</td>`
          } else {
            tr += `<td>
                <div class="actionDiv">
                    <span title="delete" class="action delete" onclick="deleteCategory(${result[i].id_c})">
                        <i class="fa fa-close"></i>
                    </span>
                    <span title="edit" class="action edit">
                        <a href="${URLROOT}admin/editCategory?id_p=${result[i].id_c}">
                            <i class="fa fa-edit"></i>
                        </a>
                    </span>
                </div>
            </td>`
          }
        tr += `</tr>`;
        }
        categoryTbody.innerHTML = tr;
      } else {
        location.replace(`${URLROOT}admin/categories`);
      }
    });

  function deleteCategory(id) {
    console.log(id);
    fetch(`http://localhost/meowpaws/backend/Admins/deleteCategory/${id}`, {
      method: "GET",
      headers: {
        "Content-Type": "application/json"
      }
    })
      .then((res) => res.json())
      .then((data) => {
        console.log(data);
        if (data.message == "Category Deleted") {
          location.replace(`${URLROOT}admin/categories`);
        } else {
          location.replace(`${URLROOT}admin/categories`);
        }
      });
  }
}