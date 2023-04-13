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

const form = document.getElementById("addUser");
form.addEventListener("submit", (event) => {
  event.preventDefault();
  const formData = new FormData(form);
  const data = Object.fromEntries(formData);

  console.log(data);

  fetch(`http://localhost/meowpaws/backend/Admins/AddUser`, {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify(data)
  })
    .then((res) => res.json())
    .then((data) => {
      if (data.message == "Account Added") {
        location.replace(`${URLROOT}admin/users`);
      } else {
        location.replace(`${URLROOT}admin/users`);
      }
    });
});
