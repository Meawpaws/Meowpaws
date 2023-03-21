var products = document.getElementById("products");
var URLROOT = `http://localhost/Meowpaws/`
fetch(
    "http://localhost/meowpaws/backend/Products/last4Product",
    {
        method: "GET",
        headers: {
            "Content-Type": "application/json",
    },
}
)
.then((res) => res.json())
.then((data) => {
    var product = `<div class="products">`
    for (let i = 0; i < data.length; i++) {
        product += `<a href="#">
        <img src="${URLROOT}layout/image/siteWebPages/${data[i].imagePricipal}" alt="">
        </a>`
    }
    product += `</div>`
    products.innerHTML = product
    });
