<?php include_once './views/inc/header.inc.php' ?>
<?php include_once './views/inc/navbarAdmin.inc.php' ?>

<link rel="stylesheet" href="<?= URLROOT ?>layout/css/styleForm.css">

<div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Add User</h3>
                    <form id="addUser" class="requires-validation" novalidate>
                        <div class="col-md-12">
                            <input class="form-control" type="text" name="name" placeholder="Name" required>
                            <div class="valid-feedback">Name is valid!</div>
                            <div class="invalid-feedback">Name cannot be blank!</div>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="text" name="prenom" placeholder="Prenom" required>
                            <div class="valid-feedback">Prenom is valid!</div>
                            <div class="invalid-feedback">Prenom cannot be blank!</div>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="text" name="username" placeholder="Username" required>
                            <div class="valid-feedback">Username is valid!</div>
                            <div class="invalid-feedback">Username cannot be blank!</div>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="email" name="email" placeholder="E-mail" required>
                            <div class="valid-feedback">Password field is valid!</div>
                            <div class="invalid-feedback">Password field cannot be blank!</div>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="valid-feedback">Email field is valid!</div>
                            <div class="invalid-feedback">Email field cannot be blank!</div>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="text" name="number" placeholder="Number" required>
                            <div class="valid-feedback">Number field is valid!</div>
                            <div class="invalid-feedback">Number field cannot be blank!</div>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="text" name="adress" placeholder="Adress" required>
                            <div class="valid-feedback">Adress field is valid!</div>
                            <div class="invalid-feedback">Adress field cannot be blank!</div>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="text" name="postCode" placeholder="PostCode" required>
                            <div class="valid-feedback">PostCode field is valid!</div>
                            <div class="invalid-feedback">PostCode field cannot be blank!</div>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="text" name="state" placeholder="State" required>
                            <div class="valid-feedback">State field is valid!</div>
                            <div class="invalid-feedback">State field cannot be blank!</div>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="text" name="country" placeholder="Country" required>
                            <div class="valid-feedback">Country field is valid!</div>
                            <div class="invalid-feedback">Country field cannot be blank!</div>
                        </div>

                        <div class="col-md-12">
                            <select class="form-select mt-3" name="role" required>
                                <option value="">Role</option>
                                <option value="1">Admin</option>
                                <option value="0">User</option>
                            </select>
                            <div class="valid-feedback">You selected a Role!</div>
                            <div class="invalid-feedback">Please select a Role!</div>
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
<script src="<?= URLROOT ?>layout/js/addUser.js"></script>