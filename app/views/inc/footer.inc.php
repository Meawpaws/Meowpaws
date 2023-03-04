<?php if (!isset($noFooter)):?>
<footer>
    <div class="infoFooter">
        <div class="titleFooter">
            INFO
        </div>
        <div class="discTitleFooter">
            <a href="#">About Us</a><br>
            <a href="#">Privacy Policy</a>
        </div>
    </div>
    <div class="contactFooter">
        <div class="titleFooter">
            <a href="#">CONTACT US</a>
        </div>
        <div class="discTitleFooter">
            <a href="">
                <img src="<?= URLROOT ?>image/pinterest.svg" alt="pinterest">
            </a>
            <a href="">
                <img src="<?= URLROOT ?>image/instagram.svg" alt="instagram">
            </a>
            <a href="">
                <img src="<?= URLROOT ?>image/facebook.svg" alt="facebook">
            </a>
            <a href="">
                <img src="<?= URLROOT ?>image/gmail.svg" alt="gmail">
            </a>
        </div>
    </div>
    <div class="paymentFooter">
        <div class="titleFooter">
            PAYMENTS
        </div>
        <div class="discTitleFooter">
            <img src="<?= URLROOT ?>image/paypal.svg" alt="paypal">
            <img src="<?= URLROOT ?>image/masterCard.svg" alt="masterCard">
            <img src="<?= URLROOT ?>image/visa.svg" alt="visa">
            <a href="">
                <br><span>How To Pay</span>
            </a>
        </div>
    </div>
    <div class="shippingEtRefoundFooter">
        <div class="titleFooter">
            SHIPPING & REFOUND
        </div>
        <div class="discTitleFooter">
            <a href="#">Shipping Policy</a><br>
            <a href="#">Return Policy</a>
        </div>
    </div>
    <div class="medcinFooter">
        <div class="titleFooter">
            MEDCIN CAN HELP
        </div>
        <div class="discTitleFooter">
            <a href="">
                <img class="medicin" src="<?= URLROOT ?>image/medicin.svg" alt="medicin">
            </a>
        </div>
    </div>
</footer>
<?php endif ?>
<!-- script -->
<script src=" <?=URLROOT?>js/main.js"></script>
<script src="<?=URLROOT?>js/bootstrap.bundle.min.js"></script>
</body>

</html>