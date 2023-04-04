// const id_user = localStorage.getItem("ID_USER");
const id_user = 1;
const id_product = localStorage.getItem("ID_PRODUCT");

var id_user_form = document.getElementById('id_user_form');
id_user_form.value = id_user
var id_produit = document.getElementById('id_produit');
id_produit.value = id_product

var fileInput = document.getElementById('file-input');
var fileButton = document.getElementById('file-button');
var p = document.getElementById('p_file_image');

fileButton.addEventListener('click', function() {
  fileInput.click();
});

fileInput.addEventListener('change', function() {
  var numFiles = fileInput.files.length;
  var buttonText = numFiles + ' fichier(s) sélectionné(s)';
  p.innerHTML = buttonText;
});

var form = document.getElementById('form');
form.addEventListener("submit", (event) => {
  event.preventDefault();
  // get the value of id_user from the form
  const id_user = form.elements.id_user.value;
  // check if id_user is undefined or null
  if (!id_user || id_user === "null" || id_user === "undefined") {
    location.replace("../users/login");
  } else {
    const formData = new FormData(form);
    const data = Object.fromEntries(formData);
    var images = formData.getAll('file')
    // check if images is not empty and not undefined
    if (images && images.length > 0) {
      delete data.file;
      data.file = images
    } else {
      data.file = ''
    }
    fetch("http://localhost/meowpaws/backend/CommentStars/Insert", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data),
    })
      .then((res) => res.json())
      .then((data) => {
        console.log(data);
        if (data.message == "Review Added") {
          location.replace(URLROOT);
        } else {
          location.replace(`${URLROOT}pages/review`);
        }
      });
  }
});
