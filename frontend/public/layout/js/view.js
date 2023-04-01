const idKeyValue = window.location.search;
const idParam = new URLSearchParams(idKeyValue);
const id = idParam.get("id");

var imagesSeconds = document.getElementById("imagesSeconds");
var pricipalImage = document.getElementById("pricipalImage");
var infoForm = document.getElementById("infoForm");
var descriptionItem = document.getElementById("descriptionItem");
var reviews = document.getElementById("reviews");
var formProduct = document.getElementById("Form");
var addCart = document.getElementById("addCart");
var buyNow = document.getElementById("buyNow");

const id_user = localStorage.getItem("ID_USER");

var URLROOT = `http://localhost/Meowpaws/`;
fetch(`http://localhost/meowpaws/backend/products/view/${id}`, {
  method: "GET",
  headers: {
    "Content-Type": "application/json",
  },
})
  .then((res) => res.json())
  .then((data) => {
    const info = data["info"];
    const images = data["images"];
    const stars = data["stars"];
    const comment = data["comment"];
    
    localStorage.setItem("ID_PRODUCT",info.id_p);
    
    for (let i = 0; i < images.length; i++) {
      const image = `<img class = "imageSecond" src ="${URLROOT}layout/image/Products/${images[i].image}">`;
      var divImageSeconder = document.createElement("div");
      divImageSeconder.innerHTML = image;
      imagesSeconds.append(divImageSeconder);
    }

    const imagePrincipal = `<img class = "imagePricipal" src ="${URLROOT}layout/image/Products/${info.imagePricipal}">`;
    var divImagePrincipal = document.createElement("div");
    divImagePrincipal.innerHTML = imagePrincipal;
    pricipalImage.append(divImagePrincipal);

    var Form = `<input type="hidden" value= "${info.id_p}" name ="id_product">
                <input type="hidden" value= "${id_user}" name ="id_user">
                <span class="inputProductView nameProductStars">
                    <input type="text" readonly value= "Name : ${info.pname}" name ="name_product">
                <span class = stars>
                    <span class="valueStar">${stars}</span>
                    <img class = "star" src ="${URLROOT}layout/image/star.svg">   
                </span>
                </span>
                <span class="inputProductView">
                    <input type="text" readonly value= "Price : $${info.price}" name ="price_product">
                </span>
                <span class="inputProductView">
                    <input type="text" readonly value= "Category : ${info.cname}" name ="category_product">
                </span>
                <span class="inputProductView">
                    <input type="number" value= "1" name ="quantity_product" id="quantity_product">
                </span>`;
          
                
    var divForm = document.createElement("div");
    divForm.innerHTML = Form;
    infoForm.append(divForm);
    
    var quantity_product = document.getElementById("quantity_product");

    quantity_product.addEventListener("input", function () {
      if (quantity_product.value<1) {
        quantity_product.value=1
      }
    });

    const itemDescription = `${info.description}`;
    descriptionItem.innerHTML = itemDescription;

    var ReviewOne = ``;
    for (let i = 0; i < comment.length; i++) {
      ReviewOne += `<div class = "ReviewOne">
                        <h1 class="personReview">
                            <img class = "imageReview" src ="${URLROOT}layout/image/profile/avatar.png">
                            ${comment[i].username}
                            <div class ="starReview">`;
      for (let j = 0; j < comment[i].star; j++) {
        ReviewOne += `<img class = "star2" src ="${URLROOT}layout/image/star.svg">`;
      }
      ReviewOne += `</div>
                        </h1>
                        <p class="review">
                        ${comment[i].comment}
                        </p>
                    </div>`;
    }
    var divReviews = document.createElement("div");
    divReviews.innerHTML = ReviewOne;
    reviews.append(divReviews);

    addCart.addEventListener("click", (event) => {
      event.preventDefault();
      if (!id_user || id_user == "null" || id_user == "undefined") {
        location.replace("../users/login");
      } else {
        const formData = new FormData(formProduct);
        const data = Object.fromEntries(formData);
        fetch("http://localhost/meowpaws/backend/Cards/Insert", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify(data),
        })
          .then((res) => res.json())
          .then((data) => {
            console.log(data.message);
          });
      }
    });
    buyNow.addEventListener("click", (event) => {
      event.preventDefault();
      if (!id_user || id_user == "null" || id_user == "undefined") {
        location.replace("../users/login");
      } else {
        const formData = new FormData(formProduct);
        const data = Object.fromEntries(formData);
        fetch("http://localhost/meowpaws/backend/Cards/Insert", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify(data),
        })
          .then((res) => res.json())
          .then((data) => {
            console.log(data.message);
            if (data.message == "Added To Card") {
                location.replace(`${URLROOT}pages/Card`);
            } else {
                location.replace(`${URLROOT}pages/view?id=${data.id_product}`);
            }
          });
      }
    });
});
