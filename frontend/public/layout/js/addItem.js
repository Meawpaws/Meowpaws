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

const categorySelect = document.getElementById('categorySelect')

fetch(`http://localhost/meowpaws/backend/Admins/getCategories`, {
  method: "GET",
  headers: {
    "Content-Type": "application/json"
  }
})
  .then((res) => res.json())
  .then((data) => {
    if (data.message == 'Categories Isset') {
      var categories = data.result
      for (let i = 0; i < categories.length; i++) {
        const id_c = categories[i].id_c
        const cname = categories[i].cname
        var option = document.createElement("option");
        option.value = id_c;
        option.text = cname;
        categorySelect.appendChild(option);
      }
    }
  })

