<h2 class="mt-4"></h2>
<div class="row">
    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-header">
                    <h3>Siswa List</h3>
                        <?php echo anchor(site_url('Siswa/create'), '+ Create students form', 'class="btn btn-primary btn-sm"'); ?> || 
                        <?php echo anchor(site_url('Siswa/create'), '<i class="fa fa-upload"></i> Import csv siswa', 'class="btn btn-success btn-sm"'); ?>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <div id="message">
                            <span class="label label-success"><?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?></span>
                        </div>
                    </div>
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Alamat Siswa</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Alamat Siswa</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach ($siswa_data as $siswa) : ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $siswa->nama_siswa ?></td>
                                    <td><?= $siswa->alamat_siswa ?></td>
                                    <td>
                                        <?php
                                        echo anchor(site_url('Siswa/read/' . $siswa->id_siswa), '<i class="fa fa-eye btn btn-info btn-sm" aria-hidden="true"></i>');
                                        echo ' | ';
                                        echo anchor(site_url('Siswa/update/' . $siswa->id_siswa), '<i class="btn btn-warning btn-sm" aria-hidden="true"> Update</i>');
                                        echo ' | ';
                                        echo anchor(site_url('Siswa/delete/'.$siswa->id_siswa),'<i class="fa fa-trash btn btn-danger btn-sm" aria-hidden="true"></i>','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                                        ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
                            <?php echo anchor(site_url('Siswa/excel'), 'Excel', 'class="btn btn-primary"'); ?>
                        </div>
                        <div class="col-md-6 text-right">
                            <?php echo $pagination ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>