<!-- lupapassword -->
<div class="content-wrapper">
	<div class="col-md-12 hold-transition login-page">
		<!-- Sidebar  -->
		<?php $this->load->view('layouts/_sidebar'); ?>
		<!-- akhir sidebar -->

		<div class="login-box mt-n5">
			<div class="card-body login-card-body">
				<h5 class="login-box-msg">Lupa Password.</h5>
				<h5 class="login-box-msg">Password baru akan dikirimkan ke alamat email.</h5>

				<form action="recover-password.html" method="post">
					<div class="input-group mb-3">
						<input type="email" class="form-control" placeholder="Email">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<button type="submit" class="btn btn-primary btn-block">Minta Password Baru</button>
						</div>
					</div>
				</form>

				<p class="mt-3 mb-1">
					<a href="<?= base_url('login') ?>">Login</a>
				</p>
				<p class="mb-0">
					<a href="<?= base_url('register') ?>" class="text-center">Register</a>
				</p>
			</div>
			<!-- /.login-card-body -->
		</div>
	</div>
</div>
<!-- akhir lupapassword -->