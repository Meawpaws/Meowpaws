<?php include_once './views/inc/header.inc.php' ?>
<?php include_once './views/inc/navbarAdmin.inc.php' ?>

<link rel = 'stylesheet' href = '<?=URLROOT?>layout/css/styleTable.css'>

<div class = 'btnCC'>
    <button class = 'btn btn-warning' id = 'commentsBtn'>Comments</button>
    <button class = 'btn btn-info ' id = 'contactBtn'>Contact</button>
</div>

<div id = 'commentsContactDiv' class="table-wrapper"><div>

<?php include_once './views/inc/footer.inc.php' ?>
<script src = '<?= URLROOT ?>layout/js/commentsContactControl.js'></script>