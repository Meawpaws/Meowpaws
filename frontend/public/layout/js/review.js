// const id_user = localStorage.getItem("ID_USER");
const id_user = 1;
const id_product = localStorage.getItem("ID_PRODUCT");


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
  if (!id_user || id_user == "null" || id_user == "undefined") {
    location.replace("../users/login");
  } else {
    const formData = new FormData(form);
  const data = Object.fromEntries(formData);
  console.log(data);
  // fetch("http://localhost/meowpaws/backend/CommentStars/Insert", {
  //   method: "POST",
  //   headers: {
  //     "Content-Type": "application/json",
  //   },
  //   body: JSON.stringify(data),
  // })
  //   .then((res) => res.json())
  //   .then((data) => {
  //     if (data.message == "Review Added") {
  //       location.replace(URLROOT);
  //   } else {
  //       location.replace(`${URLROOT}pages/review`);
  //   }
// });
  }})