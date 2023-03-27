<?php include_once './views/inc/header.inc.php' ?>
<?php include_once './views/inc/navbarUser.inc.php' ?>
<div id="product" class="productView">
    <div class ="imagesInfo">
        <div class ="images">
            <div class = "imagesSeconds">
                <img class = "imageSecond" src ="<?= URLROOT ?>layout/image/Products/i-1.svg">
                <img class = "imageSecond" src ="<?= URLROOT ?>layout/image/Products/i-2.svg">
                <img class = "imageSecond" src ="<?= URLROOT ?>layout/image/Products/i-3.svg">
                <img class = "imageSecond" src ="<?= URLROOT ?>layout/image/Products/i-1.svg">
            </div>
            <div class = "pricipalImage">
                <img class = "imagePricipal" src ="<?= URLROOT ?>layout/image/Products/i-2.svg">
            </div>
        </div>
        <form class ="infoForm" id="infoForm">
            <input type="hidden" value= "1" name ="id_product">
            <span class="inputProductView nameProductStars">
                <input type="text" readonly value= "Name Item" name ="name_product">
                <span class = stars>
                    <span class="valueStar">4.9</span>
                    <img class = "star" src ="<?= URLROOT ?>layout/image/star.svg">   
                </span>
            </span>
            <span class="inputProductView">
                <input type="text" readonly value= "Price Item" name ="price_product">
            </span>
            <span class="inputProductView">
                <input type="text" readonly value= "Category Item" name ="category_product">
            </span>
            <span class="inputProductView">
                <input type="number" placeholder= "Quantity Item" name ="quantity_product">
            </span>
            <span class ="submitFormProduct">
                <input class="cart" type="submit" value = "add to cart" name = "cart">
                <input class="buy" type="submit" value = "buy now" name = "buy">
            </span>
        </form>
    </div>
</div>
<?php include_once './views/inc/footer.inc.php' ?>