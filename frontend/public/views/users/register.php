<?php include_once './views/inc/header.inc.php' ?>
<?php include_once './views/inc/navbarUser.inc.php' ?>
    <div class="row">
        <div class="col-md-6 mx-auto mt-4">
            <div class="card card-body p-3">
                <h2>Create Account</h2>
                <span class="mb-2">*Please fill all the information to Create your Account</span>
                <form id="register">
                    <!-- name input -->
                    <div class="form-group">
                        <span for="name">Name<sup>*</sup></span>
                        <input type="text" name="username" id="name" class="form-control form-control-lg">
                        <span class="invalid-feedback" id="error_name"></span>
                    </div>
                    <!-- email input -->
                    <div class="form-group">
                        <span for="email">Email<sup>*</sup></span>
                        <input type="email" name="email" id='email' class="form-control form-control-lg">
                        <span class="invalid-feedback" id='error_email'></span>
                    </div>
                    <!-- password input -->
                    <div class="form-group">
                        <span for="password">Password<sup>*</sup></span>
                        <input type="password" name="password" id='password' class="form-control form-control-lg">
                        <span class="invalid-feedback" id='error_password'></span>
                    </div>
                    <div>
                        <input type="submit" value="Register" class="btn btn-success">
                        <a href="<?= URLROOT ?>users/login" class="btn btn-secondary">Have you an account ? Log In </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="<?= URLROOT ?>layout/js/register.js"></script>
<?php include_once './views/inc/footer.inc.php' ?>