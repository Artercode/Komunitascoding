<!-- login -->
<div class="content-wrapper">
	<div class="col-md-12 hold-transition login-page">
		<!-- Sidebar  -->
		<?php $this->load->view('layouts/_sidebar'); ?>
		<!-- akhir sidebar -->

		<div class="login-box">
			<div class="card-body login-card-body">
				<h5 class="login-box-msg"><i class="fas fa-fw fa-child"></i> Selamat Datang</h5>

				<?= form_open('auth/login', ['method' => 'POST']) ?>
				<div class="input-group mb-3">
					<?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'placeholder' => 'Isi alamat email']) ?>
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-envelope"></span>
						</div>
					</div>
				</div>
				<?= form_error('email') ?>
				<div class="input-group mb-3">
					<?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Isi password']) ?>
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<?= form_error('password') ?>
				<div class="row">
					<div class="col-12">
						<button type="submit" class="btn btn-primary btn-block">Login</button>
					</div>
				</div>
				<?= form_close() ?>

				<div class="social-auth-links text-center mb-3">
					<p>- OR -</p>
					<a href="#" class="btn btn-block btn-primary">
						<i class="fab fa-facebook mr-2"></i> Login dengan Facebook
					</a>
					<a href="#" class="btn btn-block btn-danger">
						<i class="fab fa-google-plus mr-2"></i> Login dengan Google
					</a>
				</div>
				<!-- /.social-auth-links -->

				<p class="mb-1">
					<a href="<?= base_url('lupapassword') ?>">Lupa password</a>
				</p>
				<p class="mb-0">
					<a href="<?= base_url('register') ?>" class="text-center">Register</a>
				</p>
			</div>
			<!-- /.login-card-body -->
		</div>
	</div>
</div>
<!-- akhir login -->