const id_product = localStorage.getItem("ID_PRODUCT");
var ID_USER = localStorage.getItem('ID_USER')
var id_user_form = document.getElementById("id_user_form");
id_user_form.value = ID_USER;
var id_produit = document.getElementById("id_produit");
id_produit.value = id_product;

var URLROOT = `http://localhost/Meowpaws/`;

var fileInput = document.getElementById("file-input");
var fileButton = document.getElementById("file-button");
var p = document.getElementById("p_file_image");

fileButton.addEventListener("click", function () {
  fileInput.click();
});

fileInput.addEventListener("change", function () {
  var numFiles = fileInput.files.length;
  var buttonText = numFiles + " fichier(s) sélectionné(s)";
  p.innerHTML = buttonText;
});

var form = document.getElementById("form");
form.addEventListener("submit", (event) => {
  event.preventDefault();
  // vérifier si id_user est indéfini ou nul
  if (!ID_USER || ID_USER === "null" || ID_USER === "undefined") {
    location.replace("../users/login");
  } else {
    const formData = new FormData(form);
    const data = Object.fromEntries(formData);
    var images = formData.getAll("file");
    var imagesName = [];

    for (let i = 0; i < images.length; i++) {
      nameImage = images[i].name;
      imagesName.push(nameImage);
    }
    delete data.file;
    data.file = imagesName;
    console.log(data);
    fetch("http://localhost/meowpaws/backend/CommentStars/Insert", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data),
    })
      .then((res) => res.json())
      .then((data) => {
        if (data.message == "Review Added") {
          location.replace(URLROOT);
        } else {
          location.replace(`${URLROOT}pages/review`);
        }
      });
  }
});
