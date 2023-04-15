var URLROOT_IMAGE = `http://localhost/Meowpaws/layout/image/products/`;
var IMG_DEFAULT = `http://localhost/Meowpaws/layout/image/products/item.svg`;

var formUpdateIP = document.getElementById("formUpdateIP");
var newImageIP = document.getElementById("newImageIP");
var saveImageIP = document.getElementById("saveImageIP");
var imagePrincipal = document.getElementById("imagePrincipal");
var updateImagePrincipal = document.getElementById("updateImagePrincipal");

var formUpdateI1 = document.getElementById("formUpdateI1");
var newImageI1 = document.getElementById("newImageI1");
var saveImageI1 = document.getElementById("saveImageI1");
var image1 = document.getElementById("image1");
var updateImage1 = document.getElementById("updateImage1");
var trash1 = document.getElementById("trash1");

var formUpdateI2 = document.getElementById("formUpdateI2");
var newImageI2 = document.getElementById("newImageI2");
var saveImageI2 = document.getElementById("saveImageI2");
var image2 = document.getElementById("image2");
var updateImage2 = document.getElementById("updateImage2");
var trash2 = document.getElementById("trash2");

var formUpdateI3 = document.getElementById("formUpdateI3");
var newImageI3 = document.getElementById("newImageI3");
var saveImageI3 = document.getElementById("saveImageI3");
var image3 = document.getElementById("image3");
var updateImage3 = document.getElementById("updateImage3");
var trash3 = document.getElementById("trash3");

var formUpdateI4 = document.getElementById("formUpdateI4");
var newImageI4 = document.getElementById("newImageI4");
var saveImageI4 = document.getElementById("saveImageI4");
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
    if (imagePrincipal == undefined || imagePrincipal == "undefined" || imagePrincipal==''|| imagePrincipal == ' ') {
      image.setAttribute("src", `${IMG_DEFAULT}`);
    } else {
      imagePrincipal.setAttribute("src", `${URLROOT_IMAGE}${imgPricipal}`);
    }

    for (let i = 0; i < 4; i++) {
      var j = i + 1;
      let image = document.getElementById(`image${j}`);
      if (imgsSeconder[i] == undefined || imgsSeconder[i] == "undefined" ||  imgsSeconder[i]==''|| imgsSeconder[i] == ' ') {
        image.setAttribute("src", `${IMG_DEFAULT}`);
      } else {
        image.setAttribute("src", `${URLROOT_IMAGE}${imgsSeconder[i].image}`);
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

updateImage1.addEventListener("click", () => {
  var img1src = image1.src;
  var img1array = img1src.split(
    "http://localhost/Meowpaws/layout/image/products/"
  );
  var imageOld = img1array[1];
  newImageI1.click();
  newImageI1.addEventListener("input", () => {
    saveImageI1.click();
  });
  formUpdateI1.addEventListener("submit", (event) => {
    event.preventDefault();
    fetch(
      `http://localhost/meowpaws/backend/Admins/ImageProduct/${id}/${imageOld}`,
      {
        method: "GET",
        headers: {
          "Content-Type": "application/json"
        }
      }
    )
      .then((res) => res.json())
      .then((data) => {
        var img = data.result.img;
        var id_i = data.result.img.id_i;

        if (img == undefined || img == "undefined" || img == false || img == 'false') {
          const formData = new FormData(formUpdateI1);
          const data = Object.fromEntries(formData);
          var image = formData.get("file");
          image = image.name;
          delete data.file;
          data.file = image;
          fetch(
            `http://localhost/meowpaws/backend/Admins/AddSecondeImage/${id}`,
            {
              method: "POST",
              headers: {
                "Content-Type": "application/json"
              },
              body: JSON.stringify(data)
            }
          )
          .then((res) => res.json())
          .then((data) => {
            console.log(image);
            image1.setAttribute("src", `${URLROOT_IMAGE}${image}`);
          });
        } else {
          const formData = new FormData(formUpdateI1);
          const data = Object.fromEntries(formData);
          var image = formData.get("file");
          image = image.name;
          delete data.file;
          data.file = image;
          fetch(
            `http://localhost/meowpaws/backend/Admins/UpdateSecondeImage/${id_i}`,
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
              console.log(image);
              image1.setAttribute("src", `${URLROOT_IMAGE}${image}`);
            });
        }
      });
  });
});

updateImage2.addEventListener("click", () => {
  var img2src = image2.src;
  var img2array = img2src.split(
    "http://localhost/Meowpaws/layout/image/products/"
  );
  var imageOld = img2array[1];
  newImageI2.click();
  newImageI2.addEventListener("input", () => {
    saveImageI2.click();
  });
  formUpdateI2.addEventListener("submit", (event) => {
    event.preventDefault();
    fetch(
      `http://localhost/meowpaws/backend/Admins/ImageProduct/${id}/${imageOld}`,
      {
        method: "GET",
        headers: {
          "Content-Type": "application/json"
        }
      }
    )
      .then((res) => res.json())
      .then((data) => {
        var img = data.result.img;
        var id_i = data.result.img.id_i;

        if (img == undefined || img == "undefined" || img == false || img == 'false') {
          const formData = new FormData(formUpdateI2);
          const data = Object.fromEntries(formData);
          var image = formData.get("file");
          image = image.name;
          delete data.file;
          data.file = image;
          fetch(
            `http://localhost/meowpaws/backend/Admins/AddSecondeImage/${id}`,
            {
              method: "POST",
              headers: {
                "Content-Type": "application/json"
              },
              body: JSON.stringify(data)
            }
          )
          .then((res) => res.json())
          .then((data) => {
            console.log(image);
            image2.setAttribute("src", `${URLROOT_IMAGE}${image}`);
          });
        } else {
          const formData = new FormData(formUpdateI2);
          const data = Object.fromEntries(formData);
          var image = formData.get("file");
          image = image.name;
          delete data.file;
          data.file = image;
          fetch(
            `http://localhost/meowpaws/backend/Admins/UpdateSecondeImage/${id_i}`,
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
              console.log(image);
              image2.setAttribute("src", `${URLROOT_IMAGE}${image}`);
            });
        }
      });
  });
});

updateImage3.addEventListener("click", () => {
  var img3src = image3.src;
  var img3array = img3src.split(
    "http://localhost/Meowpaws/layout/image/products/"
  );
  var imageOld = img3array[1];
  newImageI3.click();
  newImageI3.addEventListener("input", () => {
    saveImageI3.click();
  });
  formUpdateI3.addEventListener("submit", (event) => {
    event.preventDefault();
    fetch(
      `http://localhost/meowpaws/backend/Admins/ImageProduct/${id}/${imageOld}`,
      {
        method: "GET",
        headers: {
          "Content-Type": "application/json"
        }
      }
    )
      .then((res) => res.json())
      .then((data) => {
        var img = data.result.img;
        var id_i = data.result.img.id_i;

        if (img == undefined || img == "undefined" || img == false || img == 'false') {
          const formData = new FormData(formUpdateI3);
          const data = Object.fromEntries(formData);
          var image = formData.get("file");
          image = image.name;
          delete data.file;
          data.file = image;
          fetch(
            `http://localhost/meowpaws/backend/Admins/AddSecondeImage/${id}`,
            {
              method: "POST",
              headers: {
                "Content-Type": "application/json"
              },
              body: JSON.stringify(data)
            }
          )
          .then((res) => res.json())
          .then((data) => {
            console.log(image);
            image3.setAttribute("src", `${URLROOT_IMAGE}${image}`);
          });
        } else {
          const formData = new FormData(formUpdateI3);
          const data = Object.fromEntries(formData);
          var image = formData.get("file");
          image = image.name;
          delete data.file;
          data.file = image;
          fetch(
            `http://localhost/meowpaws/backend/Admins/UpdateSecondeImage/${id_i}`,
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
              console.log(image);
              image3.setAttribute("src", `${URLROOT_IMAGE}${image}`);
            });
        }
      });
  });
});

updateImage4.addEventListener("click", () => {
  var img4src = image4.src;
  var img4array = img4src.split(
    "http://localhost/Meowpaws/layout/image/products/"
  );
  var imageOld = img4array[1];
  newImageI4.click();
  newImageI4.addEventListener("input", () => {
    saveImageI4.click();
  });
  formUpdateI4.addEventListener("submit", (event) => {
    event.preventDefault();
    fetch(
      `http://localhost/meowpaws/backend/Admins/ImageProduct/${id}/${imageOld}`,
      {
        method: "GET",
        headers: {
          "Content-Type": "application/json"
        }
      }
    )
      .then((res) => res.json())
      .then((data) => {
        var img = data.result.img;
        var id_i = data.result.img.id_i;

        if (img == undefined || img == "undefined" || img == false || img == 'false') {
          const formData = new FormData(formUpdateI4);
          const data = Object.fromEntries(formData);
          var image = formData.get("file");
          image = image.name;
          delete data.file;
          data.file = image;
          fetch(
            `http://localhost/meowpaws/backend/Admins/AddSecondeImage/${id}`,
            {
              method: "POST",
              headers: {
                "Content-Type": "application/json"
              },
              body: JSON.stringify(data)
            }
          )
          .then((res) => res.json())
          .then((data) => {
            console.log(image);
            image4.setAttribute("src", `${URLROOT_IMAGE}${image}`);
          });
        } else {
          const formData = new FormData(formUpdateI4);
          const data = Object.fromEntries(formData);
          var image = formData.get("file");
          image = image.name;
          delete data.file;
          data.file = image;
          fetch(
            `http://localhost/meowpaws/backend/Admins/UpdateSecondeImage/${id_i}`,
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
              console.log(image);
              image4.setAttribute("src", `${URLROOT_IMAGE}${image}`);
            });
        }
      });
  });
});

trash1.addEventListener('click',()=>{
  var img1src = image1.src;
  var img1array = img1src.split(
    "http://localhost/Meowpaws/layout/image/products/"
  );
  var imageOld = img1array[1];
  fetch(
    `http://localhost/meowpaws/backend/Admins/ImageProduct/${id}/${imageOld}`,
    {
      method: "GET",
      headers: {
        "Content-Type": "application/json"
      }
    }
  )
    .then((res) => res.json())
    .then((data) => {
      var id_i = data.result.img.id_i;
    })
})
trash2.addEventListener('click',()=>{
  console.log('2');
})
trash3.addEventListener('click',()=>{
  console.log('3');
})
trash4.addEventListener('click',()=>{
  console.log('4');
})