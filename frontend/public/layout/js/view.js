const idKeyValue = window.location.search
const idParam = new URLSearchParams(idKeyValue)
const id = idParam.get('id')

var imagesSeconds = document.getElementById("imagesSeconds")
var pricipalImage = document.getElementById("pricipalImage")
var infoForm = document.getElementById("infoForm")
var descriptionItem = document.getElementById("descriptionItem")
var reviews = document.getElementById("reviews")

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
    });
