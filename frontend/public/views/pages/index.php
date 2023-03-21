<?php include_once './views/inc/header.inc.php' ?>
<?php include_once './views/inc/navbarUser.inc.php' ?>
<img class="coverImage" src="<?= URLROOT ?>layout/image/siteWebPages/c-1.svg" alt="cover">
<img class="coverImage" src="<?= URLROOT ?>layout/image/siteWebPages/c-2.svg" alt="cover">
<div class="h1">
    <h1>
        <img class="iconImage" src="<?= URLROOT ?>layout/image/siteWebPages/i-1.svg" alt="cover">
        Top Trending For This Season
        <img class="iconImage" src="<?= URLROOT ?>layout/image/siteWebPages/i-2.svg" alt="cover">
    </h1>
</div>
<div class="lastProducts">
    <div class="products" id="products">
        
    </div>
    <div class="btnAll">
        <a href= "<?=URLROOT?>pages/store">View More</a>
    </div>
    <p class = "title">
        FEATURED IN
    </p>
</div>
<script src="<?= URLROOT ?>layout/js/home.js"></script>
<?php include_once './views/inc/footer.inc.php' ?>