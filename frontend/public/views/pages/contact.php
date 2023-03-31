<?php include_once './views/inc/header.inc.php' ?>
<?php include_once './views/inc/navbarUser.inc.php' ?>
<div class = "Contact">
    <h1 class = "h1Contact">DROP US A LINE</h1>
    <form class = "form" method = "post">
        <label class = "labelContact">Your Name <sup>*</sup></label>
        <input type ="text" class = "inputContact" Name="name" required>
        <label class = "labelContact">Your Email <sup>*</sup></label>
        <input type ="email" class = "inputContact" Name="email" required>
        <label class = "labelContact">Your Number</label>
        <input type ="number" class = "inputContact" Name="number">
        <label class = "labelContact">Your Message <sup>*</sup></label>
        <textarea class = "textareaContact" Name="message" required></textarea>
        <div class ="submit">
            <input type="submit" value = "SEND" class = "btnAll">
        </div>   
    </form>
</div>
<script src="<?= URLROOT ?>layout/js/contact.js"></script>
<?php include_once './views/inc/footer.inc.php' ?>