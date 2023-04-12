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
                <th>Avatar</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Username</th>
                <th>Email</th>
                <th>Number</th>
                <th>Adress</th>
                <th>PostCode</th>
                <th>State</th>
                <th>Country</th>
                <th>Role</th>
                <th>Added At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img class="imageReview" src="<?=URLROOT?>layout/image/profile/avatar.png" alt="avatar"></td>
                <td>Bouchettoy</td>
                <td>MarouanE</td>
                <td>marouane216</td>
                <td>uanemaro216@gmail.com</td>
                <td>0696554077</td>
                <td>
                    <div class="adressDiv">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est repudiandae</span>
                    </div>
                </td>
                <td>4536423</td>
                <td>Safi</td>
                <td>Maroc</td>
                <td>Admin</td>
                <td>24/04/4 34:43:34</td>
                <td>
                    <div class ="actionDiv">
                        <span title="delete" class="action delete" onclick="delete(id_user)">
                            <i class="fa fa-close"></i>
                        </span>
                        <span title="edit" class="action edit">
                        <a href = "<?=URLROOT?>admin/editUser">
                                <i class="fa fa-edit"></i>
                            </a>
                        </span>
                        <span title="change role" class="action Role" onclick="role(id_user)">
                            <img src="<?=URLROOT?>layout/image/siteWebPages/userRole.svg" alt="avatar">
                        </span>
                    </div>
                </td>
            </tr>
        <tr>
                <td><img class="imageReview" src="<?=URLROOT?>layout/image/profile/avatar.png" alt="avatar"></td>
                <td>Bouchettoy</td>
                <td>MarouanE</td>
                <td>marouane216</td>
                <td>uanemaro216@gmail.com</td>
                <td>0696554077</td>
                <td>
                    <div class="adressDiv">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est repudiandae</span>
                    </div>
                </td>
                <td>4536423</td>
                <td>Safi</td>
                <td>Maroc</td>
                <td>Admin</td>
                <td>24/04/4 34:43:34</td>
                <td>
                    <div class ="actionDiv">
                        <span title="delete" class="action delete" onclick="delete(id_user)">
                            <i class="fa fa-close"></i>
                        </span>
                        <span title="edit" class="action edit">
                        <a href = "<?=URLROOT?>admin/editUser">
                                <i class="fa fa-edit"></i>
                            </a>
                        </span>
                        <span title="change role" class="action Role" onclick="role(id_user)">
                            <img src="<?=URLROOT?>layout/image/siteWebPages/userRole.svg" alt="avatar">
                        </span>
                    </div>
                </td>
            </tr>
        <tr>
                <td><img class="imageReview" src="<?=URLROOT?>layout/image/profile/avatar.png" alt="avatar"></td>
                <td>Bouchettoy</td>
                <td>MarouanE</td>
                <td>marouane216</td>
                <td>uanemaro216@gmail.com</td>
                <td>0696554077</td>
                <td>
                    <div class="adressDiv">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est repudiandae</span>
                    </div>
                </td>
                <td>4536423</td>
                <td>Safi</td>
                <td>Maroc</td>
                <td>Admin</td>
                <td>24/04/4 34:43:34</td>
                <td>
                    <div class ="actionDiv">
                        <span title="delete" class="action delete" onclick="delete(id_user)">
                            <i class="fa fa-close"></i>
                        </span>
                        <span title="edit" class="action edit">
                        <a href = "<?=URLROOT?>admin/editUser">
                                <i class="fa fa-edit"></i>
                            </a>
                        </span>
                        <span title="change role" class="action Role" onclick="role(id_user)">
                            <img src="<?=URLROOT?>layout/image/siteWebPages/userRole.svg" alt="avatar">
                        </span>
                    </div>
                </td>
            </tr>
        <tr>
                <td><img class="imageReview" src="<?=URLROOT?>layout/image/profile/avatar.png" alt="avatar"></td>
                <td>Bouchettoy</td>
                <td>MarouanE</td>
                <td>marouane216</td>
                <td>uanemaro216@gmail.com</td>
                <td>0696554077</td>
                <td>
                    <div class="adressDiv">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est repudiandae</span>
                    </div>
                </td>
                <td>4536423</td>
                <td>Safi</td>
                <td>Maroc</td>
                <td>Admin</td>
                <td>24/04/4 34:43:34</td>
                <td>
                    <div class ="actionDiv">
                        <span title="delete" class="action delete" onclick="delete(id_user)">
                            <i class="fa fa-close"></i>
                        </span>
                        <span title="edit" class="action edit">
                        <a href = "<?=URLROOT?>admin/editUser">
                                <i class="fa fa-edit"></i>
                            </a>
                        </span>
                        <span title="change role" class="action Role" onclick="role(id_user)">
                            <img src="<?=URLROOT?>layout/image/siteWebPages/userRole.svg" alt="avatar">
                        </span>
                    </div>
                </td>
            </tr>
        <tr>
                <td><img class="imageReview" src="<?=URLROOT?>layout/image/profile/avatar.png" alt="avatar"></td>
                <td>Bouchettoy</td>
                <td>MarouanE</td>
                <td>marouane216</td>
                <td>uanemaro216@gmail.com</td>
                <td>0696554077</td>
                <td>
                    <div class="adressDiv">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est repudiandae</span>
                    </div>
                </td>
                <td>4536423</td>
                <td>Safi</td>
                <td>Maroc</td>
                <td>Admin</td>
                <td>24/04/4 34:43:34</td>
                <td>
                    <div class ="actionDiv">
                        <span title="delete" class="action delete" onclick="delete(id_user)">
                            <i class="fa fa-close"></i>
                        </span>
                        <span title="edit" class="action edit">
                        <a href = "<?=URLROOT?>admin/editUser">
                                <i class="fa fa-edit"></i>
                            </a>
                        </span>
                        <span title="change role" class="action Role" onclick="role(id_user)">
                            <img src="<?=URLROOT?>layout/image/siteWebPages/userRole.svg" alt="avatar">
                        </span>
                    </div>
                </td>
            </tr>
        <tr>
                <td><img class="imageReview" src="<?=URLROOT?>layout/image/profile/avatar.png" alt="avatar"></td>
                <td>Bouchettoy</td>
                <td>MarouanE</td>
                <td>marouane216</td>
                <td>uanemaro216@gmail.com</td>
                <td>0696554077</td>
                <td>
                    <div class="adressDiv">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est repudiandae</span>
                    </div>
                </td>
                <td>4536423</td>
                <td>Safi</td>
                <td>Maroc</td>
                <td>Admin</td>
                <td>24/04/4 34:43:34</td>
                <td>
                    <div class ="actionDiv">
                        <span title="delete" class="action delete" onclick="delete(id_user)">
                            <i class="fa fa-close"></i>
                        </span>
                        <span title="edit" class="action edit">
                        <a href = "<?=URLROOT?>admin/editUser">
                                <i class="fa fa-edit"></i>
                            </a>
                        </span>
                        <span title="change role" class="action Role" onclick="role(id_user)">
                            <img src="<?=URLROOT?>layout/image/siteWebPages/userRole.svg" alt="avatar">
                        </span>
                    </div>
                </td>
            </tr>
        <tr>
                <td><img class="imageReview" src="<?=URLROOT?>layout/image/profile/avatar.png" alt="avatar"></td>
                <td>Bouchettoy</td>
                <td>MarouanE</td>
                <td>marouane216</td>
                <td>uanemaro216@gmail.com</td>
                <td>0696554077</td>
                <td>
                    <div class="adressDiv">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est repudiandae</span>
                    </div>
                </td>
                <td>4536423</td>
                <td>Safi</td>
                <td>Maroc</td>
                <td>Admin</td>
                <td>24/04/4 34:43:34</td>
                <td>
                    <div class ="actionDiv">
                        <span title="delete" class="action delete" onclick="delete(id_user)">
                            <i class="fa fa-close"></i>
                        </span>
                        <span title="edit" class="action edit">
                        <a href = "<?=URLROOT?>admin/editUser">
                                <i class="fa fa-edit"></i>
                            </a>
                        </span>
                        <span title="change role" class="action Role" onclick="role(id_user)">
                            <img src="<?=URLROOT?>layout/image/siteWebPages/userRole.svg" alt="avatar">
                        </span>
                    </div>
                </td>
            </tr>
        <tbody>
    </table>
</div>
<?php include_once './views/inc/footer.inc.php' ?>