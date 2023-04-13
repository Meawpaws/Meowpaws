<?php include_once './views/inc/header.inc.php' ?>
<?php include_once './views/inc/navbarAdmin.inc.php' ?>

    <link rel="stylesheet" href="<?=URLROOT?>layout/css/styleTable.css">

<div class="table-wrapper">
    <a class = "btnAddAll" href = "<?=URLROOT?>admin/userAdd">
        <i class = "fa fa-plus"></i>
        Add User
    </a>
    <table class="fl-table">
        <thead>
            <tr>
                <th>Full Nom</th>
                <th>Username</th>
                <th>Email</th>
                <th>Number</th>
                <th>Adress</th>
                <th>PostCode</th>
                <th>State</th>
                <th>Country</th>
                <th>Added At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="userTbody"><tbody>
    </table>
</div>
<?php include_once './views/inc/footer.inc.php' ?>
<script src="<?= URLROOT ?>layout/js/userControl.js"></script>