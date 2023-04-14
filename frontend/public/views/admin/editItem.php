<?php include_once './views/inc/header.inc.php' ?>
<?php include_once './views/inc/navbarAdmin.inc.php' ?>

<link rel="stylesheet" href="<?= URLROOT ?>layout/css/styleForm.css">

<div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Edit Item</h3>
                    <form id="editItem" class="requires-validation" novalidate></form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once './views/inc/footer.inc.php' ?>
<script src="<?= URLROOT ?>layout/js/editItem.js"></script>