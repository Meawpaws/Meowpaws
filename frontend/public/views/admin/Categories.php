<?php include_once './views/inc/header.inc.php' ?>
<?php include_once './views/inc/navbarAdmin.inc.php' ?>

    <link rel="stylesheet" href="<?=URLROOT?>layout/css/styleTable.css">

<div class="table-wrapper">
    <a class = "btnAddAll" href = "<?=URLROOT?>admin/categoryAdd">
        <i class = "fa fa-plus"></i>
        Add Category
    </a>
    <table class="fl-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="categoryTbody"><tbody>
    </table>
</div>
<?php include_once './views/inc/footer.inc.php' ?>
<script src="<?= URLROOT ?>layout/js/categoryControl.js"></script>