<?php include_once './views/inc/header.inc.php' ?>
<?php include_once './views/inc/navbarUser.inc.php' ?>
<div id="product" class="productView">
    <div class ="imagesInfo">
        <div class ="images">
            <div class = "imagesSeconds">
                <div>
                    <img class = "imageSecond" src ="<?= URLROOT ?>layout/image/Products/i-1.svg">
                </div>
                <div>
                    <img class = "imageSecond" src ="<?= URLROOT ?>layout/image/Products/i-2.svg">
                </div>
                <div>
                    <img class = "imageSecond" src ="<?= URLROOT ?>layout/image/Products/i-3.svg">
                </div>
                <div>
                    <img class = "imageSecond" src ="<?= URLROOT ?>layout/image/Products/i-1.svg">
                </div>
            </div>
            <div class = "pricipalImage">
                <img class = "imagePricipal" src ="<?= URLROOT ?>layout/image/Products/i-2.svg">
            </div>
        </div>
        <form id="infoForm">
            <div class = "infoForm">
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
            </div>
            <span class ="submitFormProduct">
                <input class="cart" type="submit" onclick="addCart()" value = "add to cart" name = "cart">
                <input class="buy" type="submit" onclick="buyNow()" value = "buy now" name = "buy">
            </span>
        </form>
    </div>
    <div class ="banelCover">
        <div class ="banelCoverImage">
            <img src ="<?= URLROOT ?>layout/image/siteWebPages/c-11.svg">
        </div>
    </div>
</div>
<div class = "titleDescriptionItem">
    <h1 class="titleItem">DESCRIPTION ITEM</h1>
    <p class="descriptionItem">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
        molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
        numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
        optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
        obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
        nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
        tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
        quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos 
        sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
        recusandae alias error harum maxime adipisci amet laborum.
    </p>
</div>
<center><h1 class="titleItem">REVIEWS</h1></center>
<div class = "reviews">
    <div class = "ReviewOne">
        <h1 class="personReview">
            <img class = "imageReview" src ="<?= URLROOT ?>layout/image/avatar.png">
            marouane
            <div class ="starReview">
                <img class = "star2" src ="<?= URLROOT ?>layout/image/star.svg"> 
                <img class = "star2" src ="<?= URLROOT ?>layout/image/star.svg"> 
                <img class = "star2" src ="<?= URLROOT ?>layout/image/star.svg"> 
                <img class = "star2" src ="<?= URLROOT ?>layout/image/star.svg"> 
                <img class = "star2" src ="<?= URLROOT ?>layout/image/star.svg"> 
            </div>
        </h1>
        <p class="review">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
            molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
            numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
            optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
            obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
            nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
            tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
            quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos 
            sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
            recusandae alias error harum maxime adipisci amet laborum.
        </p>
    </div>
    <div class = "ReviewOne">
        <h1 class="personReview">
            <img class = "imageReview" src ="<?= URLROOT ?>layout/image/avatar.png">
            mohamed amine
            <div class ="starReview">
                <img class = "star2" src ="<?= URLROOT ?>layout/image/star.svg"> 
                <img class = "star2" src ="<?= URLROOT ?>layout/image/star.svg"> 
                <img class = "star2" src ="<?= URLROOT ?>layout/image/star.svg"> 
            </div>
        </h1>
        <p class="review">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
            molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
            numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
            optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
            obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
            nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
            tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
            quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos 
            sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
            recusandae alias error harum maxime adipisci amet laborum.
        </p>
    </div>
    <div class = "ReviewOne">
        <h1 class="personReview">
            <img class = "imageReview" src ="<?= URLROOT ?>layout/image/avatar.png">
            hamza
            <div class ="starReview">
                <img class = "star2" src ="<?= URLROOT ?>layout/image/star.svg"> 
            </div>
        </h1>
        <p class="review">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
            molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
            numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
            optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
            obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
            nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
            tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
            quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos 
            sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
            recusandae alias error harum maxime adipisci amet laborum.
        </p>
    </div>
</div>
<div class ="btnReview">
    <a href="<?= URLROOT ?>pages/review">write review</a>
</div>
<?php include_once './views/inc/footer.inc.php' ?>