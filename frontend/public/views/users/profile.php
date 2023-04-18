<?php include_once './views/inc/header.inc.php' ?>
<?php include_once './views/inc/navbarUser.inc.php' ?>

<link rel="stylesheet" href="<?= URLROOT ?>layout/css/profile.css">

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" style="cursor:pointer" id="avatar">
                <form  class="opacitynone2" id="formAvatar">
                    <input type="file" name="file" accept="image/*" id="inputAvatar">
                    <input type="submit" id="saveAvatar">
                </form>
                <span class="font-weight-bold" id = "username"></span>
                <span class="text-black-50" id ="email"></span>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <form id="EditProfile"><form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"  id ="profileDelete"></div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include_once './views/inc/footer.inc.php' ?>
<script src="<?= URLROOT ?>layout/js/profile.js"></script>