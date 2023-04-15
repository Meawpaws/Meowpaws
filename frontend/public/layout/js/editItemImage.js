var URLROOT_IMAGE = `http://localhost/Meowpaws/layout/image/products/`;
var IMG_DEFAULT = `http://localhost/Meowpaws/layout/image/products/item.svg`;

var formUpdateIP = document.getElementById("formUpdateIP");
var newImageIP = document.getElementById("newImageIP");
var saveImageIP = document.getElementById("saveImageIP");
var imagePrincipal = document.getElementById("imagePrincipal");
var updateImagePrincipal = document.getElementById("updateImagePrincipal");

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
        trash.setAttribute("onclick", `deleteImage(${imgsSeconder[i].id_i},${j})`);
        updateImage.setAttribute("onclick", `updateImage(${imgsSeconder[i].id_i},${j})`);
      }
    }
  });

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

// updateImage1.addEventListener("click", () => {
//   var img1src = image1.src;
//   var img1array = img1src.split(
//     "http://localhost/Meowpaws/layout/image/products/"
//   );
//   var imageOld = img1array[1];
//   newImageI1.click();
//   newImageI1.addEventListener("input", () => {
//     saveImageI1.click();
//   });
//   formUpdateI1.addEventListener("submit", (event) => {
//     event.preventDefault();
//     fetch(
//       `http://localhost/meowpaws/backend/Admins/ImageProduct/${id}/${imageOld}`,
//       {
//         method: "GET",
//         headers: {
//           "Content-Type": "application/json"
//         }
//       }
//     )
//       .then((res) => res.json())
//       .then((data) => {
//         var img = data.result
//         var id_i = data.result.id_i;

//         if (
//           img == undefined ||
//           img == "undefined" ||
//           img == false ||
//           img == "false"
//         ) {
//           const formData = new FormData(formUpdateI1);
//           const data = Object.fromEntries(formData);
//           var image = formData.get("file");
//           image = image.name;
//           delete data.file;
//           data.file = image;
//           fetch(
//             `http://localhost/meowpaws/backend/Admins/AddSecondeImage/${id}`,
//             {
//               method: "POST",
//               headers: {
//                 "Content-Type": "application/json"
//               },
//               body: JSON.stringify(data)
//             }
//           )
//             .then((res) => res.json())
//             .then((data) => {
//               console.log(image);
//               image1.setAttribute("src", `${URLROOT_IMAGE}${image}`);
//             });
//         } else {
//           const formData = new FormData(formUpdateI1);
//           const data = Object.fromEntries(formData);
//           var image = formData.get("file");
//           image = image.name;
//           delete data.file;
//           data.file = image;
//           fetch(
//             `http://localhost/meowpaws/backend/Admins/UpdateSecondeImage/${id_i}`,
//             {
//               method: "PUT",
//               headers: {
//                 "Content-Type": "application/json"
//               },
//               body: JSON.stringify(data)
//             }
//           )
//             .then((res) => res.json())
//             .then((data) => {
//               console.log(image);
//               image1.setAttribute("src", `${URLROOT_IMAGE}${image}`);
//             });
//         }
//       });
//   });
// });

function addImage(j) {
  let formUpdateI = document.getElementById(`formUpdateI${j}`);
  let newImageI = document.getElementById(`newImageI${j}`);
  let saveImageI = document.getElementById(`saveImageI${j}`);
}

function updateImage(id_i,j) {
  let formUpdateI = document.getElementById(`formUpdateI${j}`);
  let newImageI = document.getElementById(`newImageI${j}`);
  let saveImageI = document.getElementById(`saveImageI${j}`);
}

function deleteImage(id_i,i) {
  sansImage = "item.svg";
  data = {};
  data.file = sansImage;
  fetch(`http://localhost/meowpaws/backend/Admins/UpdateSecondeImage/${id_i}`, {
    method: "PUT",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify(data)
  })
    .then((res) => res.json())
    .then((data) => {
      imageNew = document.getElementById(`image${i}`)
      imageNew.setAttribute("src", `${URLROOT_IMAGE}${sansImage}`);
    });
}