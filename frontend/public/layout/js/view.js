const idKeyValue = window.location.search
const idParam = new URLSearchParams(idKeyValue)
const id = idParam.get('id')

const imagesSeconds = document.getElementsByClassName("imagesSeconds")
const pricipalImage = document.getElementsByClassName("pricipalImage")
const infoForm = document.getElementsByClassName("infoForm")
const descriptionItem = document.getElementsByClassName("descriptionItem")
const reviews = document.getElementsByClassName("reviews")

console.log(imagesSeconds,pricipalImage,infoForm,descriptionItem,reviews);

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
    
    });
