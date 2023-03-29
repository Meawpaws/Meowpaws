<?php include_once './views/inc/header.inc.php' ?>
<?php include_once './views/inc/navbarUser.inc.php' ?>
<div id="product" class="productView">
    <div class ="imagesInfo">
        <div class ="images">
            <div class = "imagesSeconds" id="imagesSeconds">

            </div>
            <div class = "pricipalImage" id="pricipalImage">

            </div>
        </div>
        <form id="Form">
            <div class = "infoForm" id="infoForm">

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
    <p class="descriptionItem" id="descriptionItem">

    </p>
</div>
<center><h1 class="titleItem">REVIEWS</h1></center>
<div class = "reviews" id="reviews">

</div>
<div class ="btnReview">
    <a href="<?= URLROOT ?>pages/review">write review</a>
</div>
<script src="<?= URLROOT ?>layout/js/view.js"></script>
<?php include_once './views/inc/footer.inc.php' ?>