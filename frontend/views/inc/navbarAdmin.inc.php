<nav class="navbar navbar-expand-lg bg-body-tertiary navMe">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?=URLROOT?>" style="margin: 0;">
            <img class="logo" src="<?=URLROOT?>image/logo.svg" alt="logo">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse navbarMe" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto sousNavbarME1">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Items</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Categories</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto sousNavbarME2" style="margin-left : 0px !important">
                <li class="nav-item dropdown drop2">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="true">
                        <img class="icon" src="<?=URLROOT?>image/user.svg" alt="user">
                    </a>
                    <ul class="dropdown-menu mr" data-bs-popper="static">
                        <li><a class="dropdown-item" href="#">LOGIN</a></li>
                        <li><a class="dropdown-item" href="#">SIGNUP</a></li>

                        <li><a class="dropdown-item" href="#">LOGOUT</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>