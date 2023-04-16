<?php include_once './views/inc/header.inc.php' ?>
<?php include_once './views/inc/navbarAdmin.inc.php' ?>

<link rel="stylesheet" href="<?= URLROOT ?>layout/css/styleForm.css">

<div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Add Category</h3>
                    <form id="addCategory" class="requires-validation" novalidate>
                        <div class="col-md-12">
                            <input class="form-control" type="text" name="name" placeholder="Name" required>
                            <div class="valid-feedback">Category name is valid!</div>
                            <div class="invalid-feedback">Category name cannot be blank!</div>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="text" name="description" placeholder="Description" required>
                            <div class="valid-feedback">Category description is valid!</div>
                            <div class="invalid-feedback">Category description cannot be blank!</div>
                        </div>

                        <div class="form-button mt-3">
                            <button id="submit" type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once './views/inc/footer.inc.php' ?>
<script src="<?= URLROOT ?>layout/js/addCategory.js"></script>