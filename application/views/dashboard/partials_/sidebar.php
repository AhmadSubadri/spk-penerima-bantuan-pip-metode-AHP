<div id="layoutSidenav_nav" style="box-shadow: 1px 1px 2px grey;">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu bg-info">
            <div class="nav">
                <div class="sb-sidenav-menu-heading text-dark shadow-sm bg-info rounded">Core</div>
                <a class="nav-link text-dark shadow-sm bg-info rounded" href="<?= base_url('admin/Dashboard') ;?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt text-dark"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading text-dark shadow-sm bg-info rounded">Interface</div>
                <a class="nav-link text-dark shadow-sm bg-info rounded" href="<?= base_url('Siswa') ;?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-users text-dark"></i></div>
                    Siswa
                </a>
                <a class="nav-link collapsed text-dark shadow-sm bg-info rounded" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa fa-list-alt fa-lg text-dark"></i></div>
                    Kriteria
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link text-dark" href="<?= base_url('Kriteria') ;?>">Kriteria</a>
                        <a class="nav-link text-dark" href="<?= base_url('Subkriteria') ;?>">Subkriteria</a>
                    </nav>
                </div>
                <a class="nav-link collapsed text-dark shadow-sm bg-info rounded" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fa fa-random text-dark"></i></div>
                    Perhitungan
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link text-dark" href="<?= base_url('Alternatif');?>">Alternatif</a>
                        <a class="nav-link text-dark" href="<?= base_url('Perbandingan/banding');?>">Perbandingan</a>
                        <a class="nav-link text-dark" href="<?= base_url('Perbandingan/hasil');?>">Hasil Perhitungan</a>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading text-dark">Addons</div>
                <a class="nav-link text-dark shadow-sm bg-info rounded" href="<?= base_url('admin/Auth');?>">
                    <div class="sb-nav-link-icon"><i class="fa fa-cog text-dark"></i></div>
                    Setting's
                </a>
                <a class="nav-link text-dark shadow-sm bg-info rounded" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-table text-dark"></i></div>
                    Tables
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer bg-info text-dark">
            <div class="small">Logged in as:</div>
            <?php echo $this->session->userdata('identity'); ?>
        </div>
    </nav>
</div>