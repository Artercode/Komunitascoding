<!-- profil -->
<div class="content-wrapper">
	<!-- Sidebar  -->
	<?php $this->load->view('layouts/_sidebar_login'); ?>
	<!-- akhir sidebar -->

	<!-- ########## judul ########## -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<h3 class="font-weight-bold text-gray"><i class="fas fa-fw fa-project-diagram"></i> Projek</h3>
				</div>
				<!-- info -->
				<div class="h2 col-sm-6">
					<a class="float-sm-right" href="" id="dropdown" data-toggle="dropdown">
						<i class="mx-1 fas fa-fw fa-exclamation-circle"></i>
					</a>
					<!-- Dropdown info -->
					<div class="p-4 dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="dropdown">
						<h6>Profile</h6>
						<h6>Rencana update:</h6>
						<h6>-form untuk buat projek, update dan delete.</h6>
						<h6>-form projek awal load dalam keadaan tertutup</h6>
						<h6> placeholder diskrimsi maksimum 2000 huruf.</h6>
						<h6>-bagian tanya jawab/diskusi.</h6>
						<h6>-checkbox untuk posting ke aula, selama 30hari</h6>
						<h6>-batas waktu projek di anggota 365 hari.</h6>
						<h6>-notivikasi bila ada balasan diskusi</h6>
						<h6>-diskripsi gak bisa 100% width</h6>
					</div>
				</div>
				<!-- akhir info -->
			</div>
		</div>
	</section>
	<!-- ### akhir judul ### -->

	<!-- ########## halaman profile ########## -->
	<section>
		<div class="row">
			<div class="mt-n2 col-lg-11 container-fluid">
				<!-- form projek -->
				<div class="card bg-gradient-info  collapsed">
					<div class="card-header border-0">
						<h3 class="card-title">Projek Baru</h3>
						<div class="card-tools">
							<button type="submit" class="mr-2 btn btn-sm btn-warning ">Buat</button>
							<button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
								<i class="fas fa-minus"></i>
							</button>
						</div>
					</div>

					<div class="card-body">
						<form action="" method="post">
							<div class="row">
								<div class="mt-n4 col-md-4">
									<!-- nama projek -->
									<tr>
										<td>
											<h5>Nama Projek:</h5>
										</td>
										<td>
											<div class="mb-3 input-group">
												<input type="text" name="name" value="" class="form-control" placeholder="maksimum 20 huruf" max_length[20] required>
											</div>
										</td>
									</tr>
									<!-- info projek -->
									<tr>
										<td>
											<h5>Info Projek:</h5>
										</td>
										<td>
											<div class="mb-3 input-group">
												<input type="text" name="name" value="" class="form-control" placeholder="maksimum 20 huruf" max_length[20] required>
											</div>
										</td>
									</tr>
								</div>
								<div class="mt-n4 col-md-4">
									<!-- coding yang digunakan -->
									<tr>
										<td>
											<h5>Coding yang digunakan:</h5>
										</td>
										<td>
											<div class="mb-3 input-group">
												<input type="text" name="name" value="" class="form-control" placeholder="maksimum 20 huruf" max_length[20] required>
											</div>
										</td>
									</tr>
									<!-- github -->
									<tr>
										<td>
											<h5>Github link:</h5>
										</td>
										<td>
											<div class="mb-3 input-group">
												<input type="text" name="github" value="" class="form-control" placeholder="" max_length[20] required>
											</div>
										</td>
									</tr>
								</div>
								<div class="mt-n4 col-md-4">
									<h5>Diskripsi:</h5>
									<textarea type="text" name="description" class="form-control" placeholder="maksimum 2000 huruf" max_length[2000] style="min-height: 125px;"></textarea>
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- akhir form projek -->

				<!-- projek list -->
				<div class="mb-3 card card-outline card-indigo collapsed">
					<!-- card head -->
					<div class="card-header">
						<table class="table m-n3">
							<tbody>
								<tr>
									<td width="20px">
										<div class=" icheck-indigo d-inline">
											<input type="checkbox" id="checkbox1" checked>
											<label for="checkbox1"></label>
										</div>
									</td>
									<td>364h 12:05</td>
									<td>Login3Admin</td>
									<td>Sistim Login</td>
									<td>CI-BS</td>
									<td>Arter Code</td>
									<td>
										<div class="card-tools float-right">
											<div class="my-n2">
												<a href="https://github.com/Artercode/login3admin" target="_blank" type="button" class="mr-n2 btn"><i class="fab fa-github"></i></a>
												<a href="" type="button" class="mr-n2 btn"><i class="fas fa-edit text-info"></i></a>
												<a href="" type="button" class="mr-n2 btn"><i class="fas fa-trash text-danger"></i></a>
												<button type="button" class="mr-n5 btn btn-tool" data-card-widget="collapse"><i class="fas fa-fw fa-plus"></i>
												</button>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- card body -->
					<div class="card-body" style="display: none;">
						<h5>Diskripsi:</h5>
						<h6>- Login (full dinamis)</h6>
						<h6>- Admin 3 tingkat</h6>
						<h6>- Profil lengkap</h6>
						<h6>- framework: Codeigniter - AdminLTE-3.0.2</h6>
					</div>
					<!-- card footer -->
					<!-- tempat diskusi -->
				</div>
				<!-- akhir projek list -->
			</div>
		</div>
	</section>
	<!-- ### akhir halaman profile ### -->
</div>
<!-- akhir profil -->