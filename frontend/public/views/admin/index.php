<?php include_once './views/inc/header.inc.php';
$noFooter = ''; ?>
<script>
    var id_check = localStorage.getItem('ID_USER')
    if (id_check && id_check !== "null" && id_check !== "undefined") {
        var URLROOT_ADMIN = `http://localhost/Meowpaws/admin/`;
        location.replace(`${URLROOT_ADMIN}Dashboard`);
    }
</script>
    <div class="row">
        <div class="col-md-6 mx-auto mt-4">
            <div class="card card-body p-3">
                <h2>Create Account</h2>
                <span class="mb-2">*Please fill all the information to Create your Account</span>
                <form id="login">
                    <!-- email input -->
                    <div class="form-group">
                        <span for="email">Email<sup>*</sup></span>
                        <input type="email" name="email" class="form-control form-control-lg" id="email">
                        <span class="invalid-feedback" id="errorEmail"></span>
                    </div>
                    <!-- password input -->
                    <div class="form-group">
                        <span for="password">Password<sup>*</sup></span>
                        <input type="password" name="password" class="form-control form-control-lg" id="password">
                        <span class="invalid-feedback" id="errorPassword"></span>
                    </div>
                    <div>
                        <input type="submit" value="Log In" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include_once './views/inc/footer.inc.php' ?>
    <script src="<?= URLROOT ?>layout/js/loginAdmin.js"></script>