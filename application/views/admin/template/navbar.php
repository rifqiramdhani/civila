<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="<?= base_url('admin/dashboard') ?>">
        <img class="navbar-brand-full" src="<?= base_url('assets/img/brand/ciivila 2.png') ?>" width="89" height="25" alt="King Voyage">
        <img class="navbar-brand-minimized" src="<?= base_url('assets/img/brand/ciivila 2.png') ?>" width="30" height="30" alt="King Voyage">
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- navbar kanan -->
    <ul class="nav navbar-nav ml-auto">
        <span><?= ucfirst($level) ?></span>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img class="img-avatar" src="<?= base_url('assets/img/default.png') ?>">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Account</strong>
                </div>
                <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
                    <i class="fa fa-lock"></i> Logout</a>
            </div>
        </li>
    </ul>
</header>