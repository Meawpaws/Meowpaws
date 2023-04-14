const form = document.getElementById("editItem");

var URLROOT_IMAGE = `http://localhost/Meowpaws/layout/image/products/`

const idKeyValue = window.location.search;
const idParam = new URLSearchParams(idKeyValue);
const id = idParam.get("id_p");
const checkClickProductEdit = localStorage.getItem("checkClickProductEdit");

if (checkClickProductEdit != 1) {
  location.replace(`${URLROOT}admin/Items`);
} else {
  fetch(`http://localhost/meowpaws/backend/Admins/Product/${id}`, {
    method: "GET",
    headers: {
      "Content-Type": "application/json"
    }
  })
    .then((res) => res.json())
    .then((data) => {
      console.log(data);
      var info = data.result.infoProduct;
      var category = data.result.categories;
      var inputs = `<div class="col-md-12">
                        <input class="form-control" type="text" name="name" readonly value="${info.pname}" placeholder="Name" required>
                        <div class="valid-feedback">Product name is valid!</div>
                        <div class="invalid-feedback">Product name cannot be blank!</div>
                    </div>
                    
                    <div class="col-md-12">
                        <input class="form-control" type="text" name="price" value="${info.price}" placeholder="Price" required>
                        <div class="valid-feedback">Product name is valid!</div>
                        <div class="invalid-feedback">Product name cannot be blank!</div>
                    </div>
    
                    <div class="col-md-12">
                        <input class="form-control" type="text" name="description" value="${info.description}" placeholder="Description" required>
                        <div class="valid-feedback">Product description is valid!</div>
                        <div class="invalid-feedback">Product description cannot be blank!</div>
                    </div>
    
                    <div class="col-md-12">
                      <select class="form-select mt-3" name="category" id="categorySelect" required>
                        <option value="">Category</option>`
                      for (let i = 0; i < category.length; i++) {
                        inputs += `<option value="${category[i].id_c}">${category[i].cname}</option>`
                      }
                      inputs += `</select>
                      <div class="valid-feedback">You selected a Category!</div>
                      <div class="invalid-feedback">Please select a Category!</div>
                    </div>

                    <div class="form-button mt-3">
                    <button id="submit" type="submit" class="btn btn-primary">Save</button>
                    </div>`
      form.innerHTML = inputs;
      // Get the select element
      var categorySelect = document.getElementById("categorySelect");

      // Get the options of the select element
      var options = categorySelect.options;

      // Loop through the options and do something with each one
      for (var i = 0; i < options.length; i++) {
        console.log(options[i]);
        console.log(info.id_c);
        if (info.id_c == options[i].value) {
          options[i].selected = true;
        }
      }

      form.addEventListener("submit", (event) => {
        event.preventDefault();
        const formData = new FormData(form);
        const data = Object.fromEntries(formData);

        console.log(data);

        fetch(`http://localhost/meowpaws/backend/Admins/UpdateItem/${id}`, {
          method: "PUT",
          headers: {
            "Content-Type": "application/json"
          },
          body: JSON.stringify(data)
        })
          .then((res) => res.json())
          .then((data) => {
            if (data.message == "Item Updated") {
              location.replace(`${URLROOT}admin/Items`);
            } else {
              location.replace(`${URLROOT}admin/Items`);
            }
          });
      });
    });
}
