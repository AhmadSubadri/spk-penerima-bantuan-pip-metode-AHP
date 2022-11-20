<h2 class="mt-4"></h2>
<div class="row">
	<main>
		<div class="container-fluid px-4">
			<div class="card mb-4">
				<div class="card-header">
					<h3>Siswa read</h3>
					<a href="<?php echo site_url('Siswa') ?>" class="btn btn-dark btn-sm"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Kembali</a>
				</div>
				<div class="card-body">
					<table id="datatablesSimple">
						<thead>
							<tr>
								<th>Nama siswa</th>
								<th>Nama Orang Tua</th>
								<th>Alamat Siswa</th>
								<th>Visi</th>
								<th>Misi</th>
								<th>No Telpon</th>
							</tr>
						</thead>
						<tbody>
						<tr>
							<td><?php echo $nama_siswa; ?></td>
							<td><?php echo $nama_ortu; ?></td>
							<td><?php echo $alamat_siswa; ?></td>
							<td><?php echo $visi; ?></td>
							<td><?php echo $misi; ?></td>
							<td><?php echo $no_telpon; ?></td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</main>
</div>