var URLROOT_IMAGE = `http://localhost/Meowpaws/layout/image/products/`;
var IMG_DEFAULT = `http://localhost/Meowpaws/layout/image/products/item.png`;

var formUpdateIP = document.getElementById("formUpdateIP");
var newImageIP = document.getElementById("newImageIP");
var saveImageIP = document.getElementById("saveImageIP");
var imagePrincipal = document.getElementById("imagePrincipal");
var updateImagePrincipal = document.getElementById("updateImagePrincipal");

const idKeyValue = window.location.search;
const idParam = new URLSearchParams(idKeyValue);
const id = idParam.get("id_p");

function afficheImage(){
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
    if (
      imagePrincipal == undefined ||
      imagePrincipal == "undefined" ||
      imagePrincipal == "" ||
      imagePrincipal == " "
    ) {
      imagePrincipal.setAttribute("src", `${IMG_DEFAULT}`);
    } else {
      imagePrincipal.setAttribute("src", `${URLROOT_IMAGE}${imgPricipal}`);
    }

    for (let i = 0; i < 4; i++) {
      var j = i + 1;
      let image = document.getElementById(`image${j}`);
      let trash = document.getElementById(`trash${j}`);
      let updateImage = document.getElementById(`updateImage${j}`);
      if (
        imgsSeconder[i] == undefined ||
        imgsSeconder[i] == "undefined" ||
        imgsSeconder[i] == "" ||
        imgsSeconder[i] == " "
      ) {
        image.setAttribute("src", `${IMG_DEFAULT}`);
        updateImage.setAttribute("onclick", `addImage(${j})`);
      } else {
        image.setAttribute("src", `${URLROOT_IMAGE}${imgsSeconder[i].image}`);
        trash.setAttribute(
          "onclick",
          `deleteImage(${imgsSeconder[i].id_i},${j})`
        );
        updateImage.setAttribute(
          "onclick",
          `updateImage(${imgsSeconder[i].id_i},${j})`
        );
      }
    }
  });
}
afficheImage()
updateImagePrincipal.addEventListener("click", () => {
  newImageIP.click();
  newImageIP.addEventListener("input", () => {
    saveImageIP.click();
  });
  formUpdateIP.addEventListener("submit", (event) => {
    event.preventDefault();
    const formData = new FormData(formUpdateIP);
    const data = Object.fromEntries(formData);
    var image = formData.get("file");
    image = image.name;
    delete data.file;
    data.file = image;
    console.log(data);
    fetch(
      `http://localhost/meowpaws/backend/Admins/UpdatePrincipalImage/${id}`,
      {
        method: "PUT",
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify(data)
      }
    )
      .then((res) => res.json())
      .then((data) => {
        imagePrincipal.setAttribute("src", `${URLROOT_IMAGE}${image}`);
      });
  });
});

function addImage(j) {
  let formUpdateI = document.getElementById(`formUpdateI${j}`);
  let newImageI = document.getElementById(`newImageI${j}`);
  let saveImageI = document.getElementById(`saveImageI${j}`);
  let imageAff = document.getElementById(`image${j}`);
  let updateImage = document.getElementById(`updateImage${j}`);
  newImageI.click();
  newImageI.addEventListener("input", () => {
    saveImageI.click();
  });
  formUpdateI.addEventListener("submit", (event) => {
    event.preventDefault();
    const formData = new FormData(formUpdateI);
    const data = Object.fromEntries(formData);
    var image = formData.get("file");
    image = image.name;
    delete data.file;
    data.file = image;
    fetch(`http://localhost/meowpaws/backend/Admins/AddSecondeImage/${id}`, {
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify(data)
    })
      .then((res) => res.json())
      .then((data) => {
        console.log(data.result);
        imageAff.setAttribute("src", `${URLROOT_IMAGE}${image}`);
        updateImage.setAttribute("onclick", `updateImage(${data.result}, ${j})`);
      });
  });
}

function updateImage(id_i, j) {
  let formUpdateI = document.getElementById(`formUpdateI${j}`);
  let newImageI = document.getElementById(`newImageI${j}`);
  let saveImageI = document.getElementById(`saveImageI${j}`);
  let imageAff = document.getElementById(`image${j}`);
  let updateImage = document.getElementById(`updateImage${j}`);
  newImageI.click();
  newImageI.addEventListener("input", () => {
    saveImageI.click();
  });
  formUpdateI.addEventListener("submit", (event) => {
    event.preventDefault();
    const formData = new FormData(formUpdateI);
    const data = Object.fromEntries(formData);
    var image = formData.get("file");
    image = image.name;
    delete data.file;
    data.file = image;
    fetch(`http://localhost/meowpaws/backend/Admins/UpdateSecondeImage/${id_i}`, {
      method: "PUT",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify(data)
    })
      .then((res) => res.json())
      .then((data) => {
        console.log(image);
        imageAff.setAttribute("src", `${URLROOT_IMAGE}${image}`);
        updateImage.setAttribute("onclick", `updateImage(${id_i}, ${j})`);
      });
  });
}

function deleteImage(id_i, i) {
  var updateImage = document.getElementById(`updateImage${i}`);
  sansImage = "item.png";
  fetch(`http://localhost/meowpaws/backend/Admins/deleteSecondeImage/${id_i}`, {
    method: "GET",
    headers: {
      "Content-Type": "application/json"
    }
  })
    .then((res) => res.json())
    .then((data) => {
      imageNew = document.getElementById(`image${i}`);
      imageNew.setAttribute("src", `${URLROOT_IMAGE}${sansImage}`);
      updateImage.setAttribute("onclick", `addImage(${i})`);
    });
}
