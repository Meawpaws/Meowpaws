<?php include_once './views/inc/header.inc.php' ?>
<?php include_once './views/inc/navbarAdmin.inc.php' ?>

<div class='latest'>
    <div class='container'>
        <div class='row static_row_dashboard'>
            <div class='col-md-3 box_shadow_latest staticCard'>
                <div>
                    <span class='titleStatic'>Items Total</span>
                    <a href="<?= URLROOT ?>admin/Items">
                        <span class='numberStatic' id='itemsTotal'></span>
                    </a>
                </div>
                <div>
                    <span>
                        <img src='<?= URLROOT ?>layout/image/siteWebPages/i-6.svg' alt='icon'>
                    </span>
                </div>
            </div>
            <div class='col-md-3 box_shadow_latest staticCard'>
                <div>
                    <span class='titleStatic'>Categories Total</span>
                    <a href='<?= URLROOT ?>admin/Categories'>
                        <span class='numberStatic' id='categoriesTotal'></span>
                    </a>
                </div>
                <div>
                    <span>
                        <img src='<?= URLROOT ?>layout/image/siteWebPages/i-7.svg' alt='icon'>
                    </span>
                </div>
            </div>
            <div class='col-md-3 box_shadow_latest staticCard'>
                <div>
                    <span class='titleStatic'>Users Total</span>
                    <a href="<?= URLROOT ?>admin/Users">
                        <span class='numberStatic' id='usersTotal'></span>
                    </a>
                </div>
                <div>
                    <span>
                        <img src='<?= URLROOT ?>layout/image/siteWebPages/i-8.svg' alt='icon'>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class='latest'>
    <div class='container'>
        <div class='row'>
            <div class='col-sm-6 box_shadow_latest'>
                <div class='panel panel-default'>
                    <div class='panel-heading'>
                        <i class='fa fa-users'></i>
                        Latest 4 Registerd Users
                        <span class='toggle-info pull-right'>
                            <i class='fa fa-plus fa-lg'></i>
                        </span>
                    </div>
                    <div class='panel-body'>
                        <ul class='list-unstyled latest-users' id='users_latest'></ul>
                    </div>
                </div>
            </div>
            <div class='col-sm-6 box_shadow_latest'>
                <div class='panel panel-default'>
                    <div class='panel-heading'>
                        <i class='fa fa-tag'></i> Latest 4 Items
                        <span class='toggle-info pull-right'>
                            <i class='fa fa-plus fa-lg'></i>
                        </span>
                    </div>
                    <div class='panel-body'>
                        <ul class='list-unstyled latest-users' id='items_latest'></ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Latest Comments -->
        <div class='row'>
            <div class='col-sm-6 box_shadow_latest'>
                <div class='panel panel-default'>
                    <div class='panel-heading'>
                        <img src='<?= URLROOT ?>layout/image/siteWebPages/i-5.svg' class='icon' alt='icon'> Latest 4
                        Categories
                        <span class='toggle-info pull-right'>
                            <i class='fa fa-plus fa-lg'></i>
                        </span>
                    </div>
                    <div class='panel-body'>
                        <ul class='list-unstyled latest-users' id='categories_latest'></ul>
                    </div>
                </div>
            </div>
            <div class='col-sm-6 box_shadow_latest'>
                <div class='panel panel-default'>
                    <div class='panel-heading'>
                        <i class='fa fa-comments'></i>
                        <span style="cursor: pointer;" onclick="location.replace('<?=URLROOT?>admin/CommentsContact');">Latest 4 Comments</span>
                        <span class='toggle-info pull-right'>
                            <i class='fa fa-plus fa-lg'></i>
                        </span>
                    </div>
                    <div class='panel-body' id='comments_latest'></div>
                </div>
            </div>
        </div>
        <!-- End Latest Comments -->
    </div>
</div>

<?php include_once './views/inc/footer.inc.php' ?>
<script src='<?= URLROOT ?>layout/js/dashboardControl.js'></script>