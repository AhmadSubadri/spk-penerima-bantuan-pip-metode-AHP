<h1 class="mt-4">Dashboard</h1>
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body"><i class="fa fa-user fa-lg"></i> Jumlah admin ( <?php echo count($jumlah_users); ?> )</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="<?= base_url('admin/Auth');?>">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body"><i class="fa fa-users fa-lg"></i> Jumlah siswa ( <?php echo count($jumlah_siswa);?> )</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="<?= base_url('Siswa') ;?>">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body"><i class="fa fa-list-alt fa-lg"></i> Kriteria ( <?php echo count($jumlah_kriteria); ?> )</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="<?= base_url('Kriteria') ;?>">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body"><i class="fa fa-arrows-alt fa-lg" aria-hidden="true"></i> Sub - Kriteria ( <?php echo count($jumlah_subkriteria); ?> )</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="<?= base_url('Subkriteria') ;?>">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>
<br><br>
<div class="d-flex justify-content-center">
    <h3><b>Selamat datang di dashboard</b></h3>
</div>
<div class="d-flex justify-content-center text-center" style="text-shadow: 2px 1px 1px grey;">
    <h3>Sistem pendukung keputusan penerima bantuan<br>program Indonesia pintar</h3>
</div>