<nav class="navbar navbar-expand-lg bg-body-tertiary navMe">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?=URLROOT?>" style="margin: 0;">
            <img class="logo" src="<?=URLROOT?>/layout/image/logo.svg" alt="logo">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse navbarMe" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto sousNavbarME1">
                <li class="nav-item">
                    <a class="nav-link active" href="<?=URLROOT?>pages/store">Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?=URLROOT?>pages/dog">For Dog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?=URLROOT?>pages/cat">For Cat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?=URLROOT?>pages/bedBrackets">Beds & Brackets</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto sousNavbarME2" style="margin-left : 0px !important">
                <li class="nav-item dropdown drop1">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="true">
                        <img class="icon" src="<?=URLROOT?>/layout/image/lang.svg" alt="lang">
                    </a>
                    <ul class="dropdown-menu mr2" data-bs-popper="static">
                        <li><a class="dropdown-item" href="<?=URLROOT?>#">ENGLISH</a></li>
                        <li><a class="dropdown-item" href="<?=URLROOT?>#">FRANCH</a></li>
                        <li><a class="dropdown-item" href="<?=URLROOT?>#">ARABIC</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown drop2">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="true">
                        <img class="icon" src="<?=URLROOT?>/layout/image/user.svg" alt="user">
                    </a>
                    <ul class="dropdown-menu mr" data-bs-popper="static">
                        <li><a class="dropdown-item" href="<?=URLROOT?>users/login">LOGIN</a></li>
                        <li><a class="dropdown-item" href="<?=URLROOT?>users/register">SIGNUP</a></li>

                        <li><a class="dropdown-item" href="<?=URLROOT?>users/profile">PROFILE</a></li>
                        <li><a class="dropdown-item" href="<?=URLROOT?>users/logout">LOGOUT</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?=URLROOT?>pages/card">
                        <img class="icon" src="<?=URLROOT?>/layout/image/card.svg" alt="card">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>