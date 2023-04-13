<?php include_once './views/inc/header.inc.php' ?>
<?php include_once './views/inc/navbarAdmin.inc.php' ?>

    <link rel="stylesheet" href="<?=URLROOT?>layout/css/styleTable.css">

<div class="table-wrapper">
    <a class = "btnAddAll" href = "<?=URLROOT?>admin/itemAdd">
        <i class = "fa fa-plus"></i>
        Add Item
    </a>
    <table class="fl-table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="itemTbody"><tbody>
    </table>
</div>
<?php include_once './views/inc/footer.inc.php' ?>
<script src="<?= URLROOT ?>layout/js/itemControl.js"></script>