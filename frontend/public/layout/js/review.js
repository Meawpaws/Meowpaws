const id_user = localStorage.getItem("ID_USER");
const id_product = localStorage.getItem("ID_PRODUCT");
console.log(id_user)

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