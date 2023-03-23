<?php if (!isset($noFooter)):?>
<footer>
    <div class="infoFooter">
        <div class="titleFooter">
            INFO
        </div>
        <div class="discTitleFooter">
            <a href="<?=URLROOT?>pages/about">About Us</a><br>
            <a href="<?=URLROOT?>pages/privacy">Privacy Policy</a>
        </div>
    </div>
    <div class="contactFooter">
        <div class="titleFooter">
            <a href="<?=URLROOT?>pages/contact">CONTACT US</a>
        </div>
        <div class="discTitleFooter">
            <a href="">
                <img src="<?=URLROOT?>/layout/image/pinterest.svg" alt="pinterest">
            </a>
            <a href="">
                <img src="<?=URLROOT?>/layout/image/instagram.svg" alt="instagram">
            </a>
            <a href="">
                <img src="<?=URLROOT?>/layout/image/facebook.svg" alt="facebook">
            </a>
            <a href="">
                <img src="<?=URLROOT?>/layout/image/gmail.svg" alt="gmail">
            </a>
        </div>
    </div>
    <div class="paymentFooter">
        <div class="titleFooter">
            PAYMENTS
        </div>
        <div class="discTitleFooter">
            <img src="<?=URLROOT?>/layout/image/paypal.svg" alt="paypal">
            <img src="<?=URLROOT?>/layout/image/masterCard.svg" alt="masterCard">
            <img src="<?=URLROOT?>/layout/image/visa.svg" alt="visa">
            <a href="<?=URLROOT?>pages/pay">
                <br><span>How To Pay</span>
            </a>
        </div>
    </div>
    <div class="shippingEtRefoundFooter">
        <div class="titleFooter">
            SHIPPING & REFOUND
        </div>
        <div class="discTitleFooter">
            <a href="<?=URLROOT?>pages/shipping">Shipping Policy</a><br>
            <a href="<?=URLROOT?>pages/return">Return Policy</a>
        </div>
    </div>
    <div class="medcinFooter">
        <div class="titleFooter">
            MEDCIN CAN HELP
        </div>
        <div class="discTitleFooter">
            <a href="<?= URLROOT ?>pages/medicine">
                <img class="medicin" src="<?=URLROOT?>/layout/image/medicin.svg" alt="medicin">
            </a>
        </div>
    </div>
</footer>
<?php endif ?>
<!-- script -->
<script src=" <?=URLROOT?>/layout/js/main.js"></script>
<script src="<?=URLROOT?>/layout/js/bootstrap.bundle.min.js"></script>
</body>

</html>