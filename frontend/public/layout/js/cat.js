var products = document.getElementById("products");
var URLROOT = `http://localhost/Meowpaws/`
fetch(
    "http://localhost/meowpaws/backend/Products/AllByCategory/cat",
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
        product += `<a href="${URLROOT}pages/view?id=${data[i].id_p}">
        <img src="${URLROOT}layout/image/products/${data[i].imagePricipal}" alt="">
        </a>`
    }
    product += `</div>`
    products.innerHTML = product
    });
