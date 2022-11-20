<nav class="sb-topnav navbar navbar-expand navbar-dark bg-info" style="box-shadow: 2px 1px 1px grey;">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-1 text-dark" href="<?= base_url('admin/Dashboard'); ?>">
        <img class="responsive" src="<?php echo base_url() ?>assets/images/3.png">
        <b>SMAN 1 KEP.ARU</b>
    </a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm btn-secondary order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <?php echo $this->session->userdata('identity'); ?>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw text-secondary"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="<?php echo base_url('admin/Auth/logout') ?>">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>