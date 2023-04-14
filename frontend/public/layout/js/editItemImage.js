var URLROOT_IMAGE = `http://localhost/Meowpaws/layout/image/products/`;
var IMG_DEFAULT = `http://localhost/Meowpaws/layout/image/products/item.svg`;

var formUpdate = document.getElementById("formUpdate");
var newImage = document.getElementById("newImage");
var saveImage = document.getElementById("saveImage");

var imagePrincipal = document.getElementById("imagePrincipal");
var updateImagePrincipal = document.getElementById("updateImagePrincipal");

var image1 = document.getElementById("image1");
var updateImage1 = document.getElementById("updateImage1");
var trash1 = document.getElementById("trash1");

var image2 = document.getElementById("image2");
var updateImage2 = document.getElementById("updateImage2");
var trash2 = document.getElementById("trash2");

var image3 = document.getElementById("image3");
var updateImage3 = document.getElementById("updateImage3");
var trash3 = document.getElementById("trash3");

var image4 = document.getElementById("image4");
var updateImage4 = document.getElementById("updateImage4");
var trash4 = document.getElementById("trash4");

const idKeyValue = window.location.search;
const idParam = new URLSearchParams(idKeyValue);
const id = idParam.get("id_p");

fetch(`http://localhost/meowpaws/backend/Admins/ImagesProduct/${id}`, {
  method: "GET",
  headers: {
    "Content-Type": "application/json"
  }
})
  .then((res) => res.json())
  .then((data) => {
    var imgPricipal = data.result.imgPricipal;
    var imgsSeconder = data.result.imgsSeconder;

    imagePrincipal.setAttribute("src", `${URLROOT_IMAGE}${imgPricipal}`);
    if (imagePrincipal == undefined || imagePrincipal == "undefined") {
      image.setAttribute("src", `${IMG_DEFAULT}`);
    } else {
      imagePrincipal.setAttribute("src", `${URLROOT_IMAGE}${imgPricipal}`);
    }

    for (let i = 0; i < 4; i++) {
      var j = i + 1;
      let image = document.getElementById(`image${j}`);
      if (imgsSeconder[i] == undefined || imgsSeconder[i] == "undefined") {
        image.setAttribute("src", `${IMG_DEFAULT}`);
      } else {
        image.setAttribute("src", `${URLROOT_IMAGE}${imgsSeconder[i].image}`);
      }
    }
  });

updateImagePrincipal.addEventListener("click", () => {
  newImage.click();
  newImage.addEventListener("input", () => {
    saveImage.click();
  });
  formUpdate.addEventListener("submit", (event) => {
    event.preventDefault();
    const formData = new FormData(formUpdate);
    const data = Object.fromEntries(formData);
    var image = formData.get("file");
    image = image.name;
    delete data.file;
    data.file = image;
    console.log(data);
    fetch(`http://localhost/meowpaws/backend/Admins/UpdatePrincipalImage/${id}`, {
      method: "PUT",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify(data)
    })
      .then((res) => res.json())
      .then((data) => {
        imagePrincipal.setAttribute("src", `${URLROOT_IMAGE}${image}`);
      });
  });
});
