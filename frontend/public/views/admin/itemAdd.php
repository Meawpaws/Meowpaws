<?php include_once './views/inc/header.inc.php' ?>
<?php include_once './views/inc/navbarAdmin.inc.php' ?>

<link rel='stylesheet' href='<?= URLROOT ?>layout/css/styleForm.css'>

<div class='form-body'>
    <div class='row'>
        <div class='form-holder'>
            <div class='form-content'>
                <div class='form-items'>
                    <h3>Add Item</h3>
                    <form id='addUser' class='requires-validation' novalidate>
                        <div class='col-md-12'>
                            <input class='form-control' type='text' name='name' placeholder='Name' required>
                            <div class='valid-feedback'>Product name is valid!</div>
                            <div class='invalid-feedback'>Product name cannot be blank!</div>
                        </div>

                        <div class='col-md-12'>
                            <input class='form-control' type='text' name='price' placeholder='Price' required>
                            <div class='valid-feedback'>Product name is valid!</div>
                            <div class='invalid-feedback'>Product name cannot be blank!</div>
                        </div>

                        <div class='col-md-12'>
                            <input class='form-control' type='text' name='description' placeholder='Description' required>
                            <div class='valid-feedback'>Product description is valid!</div>
                            <div class='invalid-feedback'>Product description cannot be blank!</div>
                        </div>

                        <div class='col-md-12'>
                            <select class='form-select mt-3' name='category' id='categorySelect' required>
                                <option value=''>Category</option>
                            </select>
                            <div class="valid-feedback">You selected a Category!</div>
                            <div class='invalid-feedback'>Please select a Category!</div>
                        </div>

                        <div class='form-button mt-3'>
                            <button id='submit' type='submit' class='btn btn-primary'>Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once './views/inc/footer.inc.php' ?>
<script src='<?= URLROOT ?>layout/js/addItem.js'></script>