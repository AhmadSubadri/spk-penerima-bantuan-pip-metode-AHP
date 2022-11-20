<h2 class="mt-4"></h2>
<div class="row">
	<main>
		<div class="container-fluid px-4">
			<div class="card mb-4">
				<div class="card-header">
					<h3>User's</h3>
				</div>
				<div class="card-body">
					<div class="col-md-12">
						<table class="table table-bordered responsive">
							<?= anchor('admin/Auth/create_user', '<i class="btn btn-primary btn-sm" aria-hidden="true"> + Tambah User</i>'); ?> | <?= anchor('admin/Auth/create_group', '<i class="btn btn-info btn-sm" aria-hidden="true"> + Tambah Group</i>'); ?>
							<br><br>
							<?php
							if ($this->session->flashdata('gagal')) {
								echo  "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>" . $this->session->flashdata('gagal') . "</div>";
							} else if ($this->session->flashdata('sukses')) {
								echo  "<div class='alert alert-info alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>" . $this->session->flashdata('sukses') . "</div>";
							}
							?>
							<div id="infoMessage"><?php echo $message; ?></div>
							<thead>
								<tr>
									<th width="5%">No</th>
									<th>Nama</th>
									<th>Email</th>
									<th>Group</th>
									<th>Status</th>
									<th width="15%">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($users as $user) : ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?php echo htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($user->last_name, ENT_QUOTES, 'UTF-8'); ?></td>
										<td><?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></td>
										<td>
											<?php foreach ($user->groups as $group) : ?>
												<?php echo anchor('admin/Auth/edit_group/' . $group->id, htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8'), array('class' => 'badge badge-secondary badge-roundless')); ?>
											<?php endforeach ?>
										</td>
										<td><?php echo ($user->active) ? anchor("admin/Auth/deactivate/" . $user->id, lang('index_active_link'), array('class' => 'badge badge-primary badge-roundless')) : anchor("admin/Auth/activate/" . $user->id, lang('index_inactive_link'), array('class' => 'badge badge-secondary badge-roundless')); ?></td>
										<td>
											<?php echo anchor('admin/Auth/edit_user/' . $user->id, 'Edit', array('class' => 'btn btn-default')) ?>
											<button class="btn btn-danger btn-sm" data-href="<?php echo base_url('auth/delete_user/' . $user->id) ?>" data-toggle="modal" data-target="#confirm-delete">Delete</button>
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</main>
</div>