const tableProduct = document.getElementById("tableProduct");
const sumPrice = document.getElementById("sumPrice");
var priceSum = 0;
var URLROOT = `http://localhost/Meowpaws/`;
var URLIMGPRODUCT = `http://localhost/Meowpaws/layout/image/products/`
if (!id_user || id_user === "null" || id_user === "undefined") {
  location.replace("../users/login");
} else {
  fetch(
    `http://localhost/meowpaws/backend/Cards/GetProductByIdUser/${id_user}`,
    {
      method: "GET",
      headers: {
        "Content-Type": "application/json",
      },
    }
  )
    .then((res) => res.json())
    .then((data) => {
      var result = data.result;
      console.log(result);
      if (data.message == "Products In Card") {
        var product = ``
        for (let i = 0; i < result.length; i++) {
          var id_card = result[i].id_card;
          var imagePricipal = result[i].imagePricipal;
          var pname = result[i].pname;
          var price = result[i].price;
          var priceCard = result[i].priceCard;
          var quantité = result[i].quantité;
          console.log(
            id_card,
            imagePricipal,
            pname,
            price,
            priceCard,
            quantité
          );
          product += `<tr>
                    <td data-th="Product">
                      <div class="row">
                        <div class="col-md-3 text-left">
                          <img src="${URLIMGPRODUCT}${imagePricipal}" alt="produc Image" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                        </div>
                        <div class="col-md-9 text-left mt-sm-2">
                          <h4>Product Name</h4>
                          <p class="font-weight-light">${pname}</p>
                        </div>
                      </div>
                    </td>
                    <td data-th="Price">$${priceCard}</td>
                    <td data-th="Quantity">
                      <input type="number" id="quantity_product${i}" class="form-control form-control-lg text-center" value="${quantité}">
                    </td>
                    <td class="actions" data-th="">
                      <div class="text-right">
                          <button class="btn btn-white border-secondary bg-white btn-md mb-2" onclick = "delete()">
                            <i class="fas fa-trash"></i>
                          </button>
                      </div>
                    </td>
                  </tr>`;
        }
        tableProduct.innerHTML = product
      } else {
        console.log(data.message);
      }
    });
}
//
//   var quantity_product = document.getElementById(`quantity_product${i}`);
//   quantity_product.addEventListener("input", function () {
//     if (quantity_product.value < 1) {
//       quantity_product.value = 1;
//     }
//   });
//   var priceGlobal = quantity_product.value * result[i].price;
//   var priceGlobal = result[i].quantité * result[i].price;
//   priceSum += priceGlobal;
//   sumPrice.innerHTML = priceSum;
//   tableProduct.innerHTML = product;
//                      <a href="${URLROOT}card/delete/${result[i].id_card}">
// </a>