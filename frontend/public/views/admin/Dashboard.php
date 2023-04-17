<?php include_once './views/inc/header.inc.php' ?>
<?php include_once './views/inc/navbarAdmin.inc.php' ?>

<div class="latest">
    <div class="container">
        <div class = "row static_row_dashboard">
            <div class="col-md-3 box_shadow_latest staticCard">
                <div>
                    <span class="titleStatic">Items Total</span>
                    <span class="numberStatic">3223</span>
                </div>
                <div>
                    <span>
                        <img src ="<?=URLROOT?>layout/image/siteWebPages/i-6.svg" alt ="icon">
                    </span>
                </div>
            </div>
            <div class="col-md-3 box_shadow_latest staticCard">
                <div>
                    <span class="titleStatic">Categories Total</span>
                    <span class="numberStatic">34134</span>
                </div>
                <div>
                    <span>
                        <img src ="<?=URLROOT?>layout/image/siteWebPages/i-7.svg" alt ="icon">
                    </span>
                </div>
            </div>
            <div class="col-md-3 box_shadow_latest staticCard">
                <div>
                    <span class="titleStatic">Users Total</span>
                    <span class="numberStatic">5415</span>
                </div>
                <div>
                    <span>
                        <img src ="<?=URLROOT?>layout/image/siteWebPages/i-8.svg" alt ="icon">
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="latest">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 box_shadow_latest">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-users"></i>
                        Latest 6 Registerd Users
                        <span class="toggle-info pull-right">
                            <i class="fa fa-plus fa-lg"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <ul class="list-unstyled latest-users">
                            <li>
                                marouane
                                <a href="members.php?do=Edit&userid=2">
                                    <span class="btn btn-success pull-right">
                                        <i class="fa fa-edit"></i> Edit
                                    </span>
                                </a>
                            </li>
                            <li>
                                marouane
                                <a href="members.php?do=Edit&userid=2">
                                    <span class="btn btn-success pull-right">
                                        <i class="fa fa-edit"></i> Edit
                                    </span>
                                </a>
                            </li>
                            <li>
                                marouane
                                <a href="members.php?do=Edit&userid=2">
                                    <span class="btn btn-success pull-right">
                                        <i class="fa fa-edit"></i> Edit
                                    </span>
                                </a>
                            </li>
                            <li>
                                marouane
                                <a href="members.php?do=Edit&userid=2">
                                    <span class="btn btn-success pull-right">
                                        <i class="fa fa-edit"></i> Edit
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 box_shadow_latest">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-tag"></i> Latest 4 Items
                        <span class="toggle-info pull-right">
                            <i class="fa fa-plus fa-lg"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <ul class="list-unstyled latest-users">
                            <li>
                                bed
                                <a href="items.php?do=Edit&itemid=' . $item['Item_ID'] . '">
                                    <span class="btn btn-success pull-right">
                                        <i class="fa fa-edit"></i> Edit
                                    </span>
                                </a>
                            </li>
                            <li>
                                crokette
                                <a href="items.php?do=Edit&itemid=' . $item['Item_ID'] . '">
                                    <span class="btn btn-success pull-right">
                                        <i class="fa fa-edit"></i> Edit
                                    </span>
                                </a>
                            </li>
                            <li>
                                bracket
                                <a href="items.php?do=Edit&itemid=' . $item['Item_ID'] . '">
                                    <span class="btn btn-success pull-right">
                                        <i class="fa fa-edit"></i> Edit
                                    </span>
                                </a>
                            </li>
                            <li>
                                bruch
                                <a href="items.php?do=Edit&itemid=' . $item['Item_ID'] . '">
                                    <span class="btn btn-success pull-right">
                                        <i class="fa fa-edit"></i> Edit
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Latest Comments -->
        <div class="row">
            <div class="col-sm-6 box_shadow_latest">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <img src ="<?=URLROOT?>layout/image/siteWebPages/i-5.svg" class = "icon" alt ="icon"> Latest 4 Items
                        <span class="toggle-info pull-right">
                            <i class="fa fa-plus fa-lg"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <ul class="list-unstyled latest-users">
                            <li>
                                for dog
                                <a href="items.php?do=Edit&itemid=' . $item['Item_ID'] . '">
                                    <span class="btn btn-success pull-right">
                                        <i class="fa fa-edit"></i> Edit
                                    </span>
                                </a>
                            </li>
                            <li>
                                for cat
                                <a href="items.php?do=Edit&itemid=' . $item['Item_ID'] . '">
                                    <span class="btn btn-success pull-right">
                                        <i class="fa fa-edit"></i> Edit
                                    </span>
                                </a>
                            </li>
                            <li>
                                bed braket
                                <a href="items.php?do=Edit&itemid=' . $item['Item_ID'] . '">
                                    <span class="btn btn-success pull-right">
                                        <i class="fa fa-edit"></i> Edit
                                    </span>
                                </a>
                            </li>
                            <li>
                                krokette
                                <a href="items.php?do=Edit&itemid=' . $item['Item_ID'] . '">
                                    <span class="btn btn-success pull-right">
                                        <i class="fa fa-edit"></i> Edit
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 box_shadow_latest">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-comments"></i>
                        Latest 4 Comments
                        <span class="toggle-info pull-right">
                            <i class="fa fa-plus fa-lg"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="comment-box">
                            <span class="member-n">
                                <a href="<?=URLROOT?>admin/members/<=$id_u?>">
                                    Marouane
                                </a>
                            </span>
                            <p class="member-c">Good</p>
                        </div>
                        <div class="comment-box">
                            <span class="member-n">
                                <a href="<?=URLROOT?>admin/members/<=$id_u?>">
                                    Marouane
                                </a>
                            </span>
                            <p class="member-c">Good</p>
                        </div>
                        <div class="comment-box">
                            <span class="member-n">
                                <a href="<?=URLROOT?>admin/members/<=$id_u?>">
                                    Marouane
                                </a>
                            </span>
                            <p class="member-c">Good</p>
                        </div>
                        <div class="comment-box">
                            <span class="member-n">
                                <a href="<?=URLROOT?>admin/members/<=$id_u?>">
                                    Marouane
                                </a>
                            </span>
                            <p class="member-c">Good</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Latest Comments -->
    </div>
</div>

<?php include_once './views/inc/footer.inc.php' ?>
<script src="<?= URLROOT ?>layout/js/dashboardControl.js"></script>