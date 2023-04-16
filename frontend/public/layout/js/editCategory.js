(function () {
    ("use strict");
    const forms = document.querySelectorAll(".requires-validation");
    Array.from(forms).forEach(function (form) {
      form.addEventListener(
        "click",
        function (event) {
          localStorage.setItem("checkClickUserEdit", 0);
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
  
          form.classList.add("was-validated");
        },
        false
      );
    });
  })();
  
  const form = document.getElementById("editCategory");
  
  const idKeyValue = window.location.search;
  const idParam = new URLSearchParams(idKeyValue);
  const id = idParam.get("id_p");
  
    fetch(`http://localhost/meowpaws/backend/Admins/Category/${id}`, {
      method: "GET",
      headers: {
        "Content-Type": "application/json"
      }
    })
      .then((res) => res.json())
      .then((data) => {
        console.log(data)
        var category = data.result
        var inputs = `<div class="col-md-12">
                        <input class="form-control" type="text" name="name" value="${category.cname}" placeholder="Name" required>
                        <div class="valid-feedback">Category name is valid!</div>
                        <div class="invalid-feedback">Category name cannot be blank!</div>
                      </div>
                      
                      <div class="col-md-12">
                        <input class="form-control" type="text" name="description" value="${category.Description}" placeholder="Description" required>
                        <div class="valid-feedback">Category description is valid!</div>
                        <div class="invalid-feedback">Category description cannot be blank!</div>
                      </div>
  
                      <div class="form-button mt-3">
                        <button id="submit" type="submit" class="btn btn-primary">Save</button>
                      </div>`
        form.innerHTML = inputs;
  
        form.addEventListener("submit", (event) => {
          event.preventDefault();
          const formData = new FormData(form);
          const data = Object.fromEntries(formData);
  
          console.log(data);
  
          fetch(`http://localhost/meowpaws/backend/Admins/UpdateCategory/${id}`, {
            method: "PUT",
            headers: {
              "Content-Type": "application/json"
            },
            body: JSON.stringify(data)
          })
            .then((res) => res.json())
            .then((data) => {
              if (data.message == "Category Updated") {
                location.replace(`${URLROOT}admin/categories`);
              } else {
                location.replace(`${URLROOT}admin/categories`);
              }
            });
        });
      });