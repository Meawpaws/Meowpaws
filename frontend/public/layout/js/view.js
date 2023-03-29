const idKeyValue = window.location.search
const idParam = new URLSearchParams(idKeyValue)
const id = idParam.get('id')

var imagesSeconds = document.getElementById("imagesSeconds")
var pricipalImage = document.getElementById("pricipalImage")
var infoForm = document.getElementById("infoForm")
var descriptionItem = document.getElementById("descriptionItem")
var reviews = document.getElementById("reviews")
var formProduct = document.getElementById("Form")

var URLROOT = `http://localhost/Meowpaws/`
fetch(
    `http://localhost/meowpaws/backend/products/view/${id}`,
    {
        method: "GET",
        headers: {
            "Content-Type": "application/json",
    },
}
)
.then((res) => res.json())
.then((data) => {
    const info = data['info']
    const images = data['images']
    const stars = data['stars']
    for (let i = 0; i < images.length; i++) {
        const image = `<img class = "imageSecond" src ="${URLROOT}layout/image/Products/${images[i].image}">`
        var divImageSeconder = document.createElement('div');
        divImageSeconder.innerHTML = image;
        imagesSeconds.append(divImageSeconder);
    }

    const imagePrincipal = `<img class = "imagePricipal" src ="${URLROOT}layout/image/Products/${info.imagePricipal}">`
    var divImagePrincipal = document.createElement('div');
    divImagePrincipal.innerHTML = imagePrincipal;
    pricipalImage.append(divImagePrincipal);

    var Form =`<input type="hidden" value= "${info.id_p}" name ="id_product">
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
                    <input type="number" value= "1" name ="quantity_product">
                </span>`
    var divForm = document.createElement('div');
    divForm.innerHTML = Form;
    infoForm.append(divForm);

    const itemDescription = `${info.description}`
    descriptionItem.innerHTML = itemDescription;
    });
