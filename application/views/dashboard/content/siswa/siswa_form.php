<h2 class="mt-4"></h2>
<div class="row">
    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-header">
                    <h3>siswa <?php echo $button ?></h3>
                </div>
                <div class="card-body">
                    <form action="<?php echo $action; ?>" method="post">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <?php echo form_error('nama_siswa') ?>
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" name="nama_siswa" id="nama_siswa" value="<?php echo $nama_siswa; ?>" type="text" placeholder="Enter your first name" />
                                    <label for="nama_siswa">Nama Siswa</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <?php echo form_error('nama_ortu') ?>
                                <div class="form-floating">
                                    <input class="form-control" name="nama_ortu" id="nama_ortu" value="<?php echo $nama_ortu; ?>" type="text" placeholder="Enter your last name" />
                                    <label for="nama_ortu">Nama Orang Tua</label>
                                </div>
                            </div>
                        </div>
                        <?php echo form_error('alamat_siswa') ?>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="alamat_siswa" id="alamat_siswa" type="text" value="<?php echo $alamat_siswa; ?>" placeholder="Jl. Tarumanegara" />
                            <label for="alamat_siswa">Alamat siswa</label>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <?php echo form_error('visi') ?>
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" name="visi" id="visi" type="text" value="<?php echo $visi; ?>" placeholder="Create a visi" />
                                    <label for="visi">Visi</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <?php echo form_error('misi') ?>
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" name="misi" id="misi" value="<?php echo $misi; ?>" type="text" placeholder="Create a misi" />
                                    <label for="misi">Misi</label>
                                </div>
                            </div>
                        </div>
                        <?php echo form_error('no_telpon') ?>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="no_telpon" id="no_telpon" value="<?php echo $no_telpon; ?>" type="text" placeholder="0812********" />
                            <label for="no_telpon">Nomor Telpon</label>
                        </div>
                        <div class="row mb-3">
                            <input type="hidden" name="id_siswa" value="<?php echo $id_siswa; ?>"/>
                            <div class="d-grid col-md-6">
                                <input class="btn btn-primary btn-block" type="submit" value="<?php echo $button ?>" />
                            </div>
                            <div class="d-grid col-md-6">
                                <a href="<?php echo site_url('Siswa') ?>" class="btn btn-danger ">X Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>