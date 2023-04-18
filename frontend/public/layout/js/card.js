const checkout = document.getElementById("checkout");

var arrayProductIndexDeleted = [];

localStorage.setItem("arrayProductIndexDeleted", arrayProductIndexDeleted);

const tableProduct = document.getElementById("tableProduct");
const sumPrice = document.getElementById("sumPrice");
const itemsTotal = document.getElementById("itemsTotal");
const itemsTotalP = document.getElementById("itemsTotalP");
var URLROOT = `http://localhost/Meowpaws/`;
var URLIMGPRODUCT = `http://localhost/Meowpaws/layout/image/products/`;
if (!id_user || id_user === "null" || id_user === "undefined") {
  location.replace("../users/login");
} else {
  fetch(
    `http://localhost/meowpaws/backend/Cards/GetProductByIdUser/${id_user}`,
    {
      method: "GET",
      headers: {
        "Content-Type": "application/json"
      }
    }
  )
    .then(res => res.json())
    .then(data => {
      var result = data.result;
      if (data.message == "Products In Card") {
        console.log(result);
        var count = result.length;
        var tr = "";
        var sumPriceGlobalFirst = 0;
        for (let i = 0; i < result.length; i++) {
          var id_card = result[i].id_card;
          var imagePricipal = result[i].imagePricipal;
          var pname = result[i].pname;
          var price = result[i].price;
          var priceCard = result[i].priceCard;
          var quantité = result[i].quantité;

          sumPriceGlobalFirst += priceCard;

          sumPrice.innerText = `$${sumPriceGlobalFirst}`;

          tr += `<tr id="${i}">
                  <td data-th="Product">
                    <div class="row">
                      <div class="col-md-3 text-left">
                        <img src="${URLIMGPRODUCT}${imagePricipal}" alt="product Image" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                      </div>
                      <div class="col-md-9 text-left mt-sm-2">
                        <h4>Product Name</h4>
                        <p class="font-weight-light">${pname}</p>
                      </div>
                    </div>
                  </td>
                  <td data-th="Price" id="priceGlobal${i}" class = "priceGlobal">$${priceCard}</td>
                  <td data-th="Quantity">
                    <input type="number" id="quantity_product${i}" onclick="changeQuantity(${i},${price});changePriceTotalWithChangeQuantity(${result.length})" class="form-control clickNow form-control-lg text-center" value="${quantité}">
                  </td>
                  <td class="actions" data-th="">
                    <div class="text-right">
                        <button class="btn btn-white border-secondary bg-white btn-md mb-2" onclick = "deleteITem(${id_card},${i});changePriceTotalWithDeleteProduct(${result.length},${i})"">
                          <i class="fas fa-trash"></i>
                        </button>
                    </div>
                  </td>
                </tr>`;
        }
        tableProduct.innerHTML = tr;
        console.log(count);
        itemsTotal.innerText = count;
      } else {
        itemsTotal.innerText = 0;
        console.log(data.message);
      }
    });
}
function changeQuantity(i, price) {
  var priceGlobal = document.getElementById(`priceGlobal${i}`);
  var quantity_product = document.getElementById(`quantity_product${i}`);

  quantity_product.addEventListener("input", () => {
    var newQuantity = quantity_product.value;

    if (newQuantity < 1) {
      quantity_product.value = 1;
      newQuantity = 1;
    }

    var newPriceSans$ = parseFloat(parseFloat(price) * parseFloat(newQuantity));
    newPrice = `$${newPriceSans$}`;
    priceGlobal.innerText = newPrice;
  });
}

function changePriceTotalWithDeleteProduct(taille, indexDeleted) {
  var arrayPrice = [];
  var arrayPriceNoDeleted = [];
  for (let i = 0; i < taille; i++) {
    let priceGlobal = document.getElementById(`priceGlobal${i}`);
    var priceAvec$ = priceGlobal.innerText;
    var priceArray = priceAvec$.split("$");
    var price = priceArray[1];

    arrayPrice.push(price);

    arrayProductIndexDeleted.push(indexDeleted);
    localStorage.setItem("arrayProductIndexDeleted", arrayProductIndexDeleted);
    for (let j = 0; j < arrayProductIndexDeleted.length; j++) {
      if (i == arrayProductIndexDeleted[j]) {
        delete arrayPrice[i];
      }
    }
  }
  for (let i = 0; i < arrayPrice.length; i++) {
    if (arrayPrice[i] != undefined) {
      arrayPriceNoDeleted.push(arrayPrice[i]);
    }
  }
  var sum = 0;
  for (let i = 0; i < arrayPriceNoDeleted.length; i++) {
    sum += parseFloat(arrayPriceNoDeleted[i]);
  }
  sumPrice.innerText = `$${sum}`;
}

function changePriceTotalWithChangeQuantity(taille) {
  for (let index = 0; index < taille; index++) {
    let quantity_product0 = document.getElementById(`quantity_product${index}`);
    quantity_product0.addEventListener("input", () => {
      var arrayPrice = [];
      var arrayPriceNoDeleted = [];
      for (let i = 0; i < taille; i++) {
        let priceGlobal = document.getElementById(`priceGlobal${i}`);
        var priceAvec$ = priceGlobal.innerText;
        var priceArray = priceAvec$.split("$");
        var price = priceArray[1];

        arrayPrice.push(price);

        var arrayProductIndexDeleted = localStorage.getItem(
          "arrayProductIndexDeleted"
        );
        for (let j = 0; j < arrayProductIndexDeleted.length; j++) {
          if (i == arrayProductIndexDeleted[j]) {
            delete arrayPrice[i];
          }
        }
      }
      for (let i = 0; i < arrayPrice.length; i++) {
        if (arrayPrice[i] != undefined) {
          arrayPriceNoDeleted.push(arrayPrice[i]);
        }
      }
      var sum = 0;
      for (let i = 0; i < arrayPriceNoDeleted.length; i++) {
        sum += parseFloat(arrayPriceNoDeleted[i]);
      }
      sumPrice.innerText = `$${sum}`;
    });
  }
}

function deleteITem(id_card, i) {
  const tr2 = document.getElementById(i);
  tr2.style.display = "none";
  var count = itemsTotal.innerText;
  var count2 = count - 1;
  itemsTotal.innerText = count2;
  fetch(
    `http://localhost/meowpaws/backend/Cards/DeleteProductInCard/${id_card}`,
    {
      method: "GET",
      headers: {
        "Content-Type": "application/json"
      }
    }
  )
    .then(res => res.json())
    .then(data => {
      console.log(data);
    });
}

checkout.addEventListener("click", () => {
  const sumPrice2 = document.getElementById("sumPrice");
  const priceGlobal2 = sumPrice2.innerHTML;
  console.log(priceGlobal2, id_user);
  if (priceGlobal2 != '$0') {
    fetch(
      `http://localhost/meowpaws/backend/Cards/DeleteProductInCardByIdUser/${id_user}`,
      {
        method: "GET",
        headers: {
          "Content-Type": "application/json"
        }
      }
    )
      .then(res => res.json())
      .then(data => {
        console.log(data);
      });
      var dataCheckout={
        price : priceGlobal2, 
        id_user : id_user
      }
      console.log(dataCheckout);
      fetch(`http://localhost/meowpaws/backend/Cards/Checkout`, {
        method: "POST",
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify(dataCheckout)
      })
        .then((res) => res.json())
        .then((data) => {
          if (data.message == "Checkout Susses") {
            location.replace(`${URLROOT}pages/Card`);
          } else {
            location.replace(`${URLROOT}pages/Card`);
          }
        });
  }
});
