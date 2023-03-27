const idKeyValue = window.location.search
const idParam = new URLSearchParams(idKeyValue)
const id = idParam.get('id')

let product = document.querySelector('#product')

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
console.log(data);
    });
