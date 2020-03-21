<!-- register -->
<div class="content-wrapper">
	<div class="col-md-12 hold-transition register-page">
		<!-- Sidebar  -->
		<?php $this->load->view('layouts/_sidebar'); ?>
		<!-- akhir sidebar -->

		<div class="register-box">
			<div class="card-body register-card-body">
				<h5 class="login-box-msg">Daftar anggota baru</h5>

				<?= form_open('auth/register', ['method' => 'POST']) ?>
				<div class="input-group">
					<?= form_input('name', $input->name, ['class' => 'form-control', 'placeholder' => 'Isi nama', 'autofocus' => true]) ?>
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-user"></span>
						</div>
					</div>
				</div>
				<?= form_error('name') ?>

				<div class="mt-3 input-group">
					<?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'placeholder' => 'Isi alamat email']) ?>
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-envelope"></span>
						</div>
					</div>
				</div>
				<?= form_error('email') ?>

				<div class="mt-3 input-group">
					<?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Isi password min 8 karakter']) ?>
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<?= form_error('password') ?>

				<div class="mt-3 input-group">
					<?= form_password('password_confirmation', '', ['class' => 'form-control', 'placeholder' => 'Isi password yang sama']) ?>
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<?= form_error('password_confirmation') ?>

				<div class="row">
					<div class="mt-3 col-12">
						<button type="submit" class="btn btn-primary btn-block">Register</button>
					</div>
				</div>
				<?= form_close() ?>

				<!-- <div class="social-auth-links text-center">
					<p>- OR -</p>
					<a href="#" class="btn btn-block btn-primary">
						<i class="fab fa-facebook mr-2"></i>
						Login dengan Facebook
					</a>
					<a href="#" class="btn btn-block btn-danger">
						<i class="fab fa-google-plus mr-2"></i>
						Login dengan Google
					</a>
				</div> -->
				<div class="mt-3 text-center">
					<a href="<?= base_url('login') ?>">Saya sudah punya AKUN</a>
				</div>
			</div>
			<!-- /.form-box -->
		</div><!-- /.card -->
	</div>
</div>
<!-- akhir register -->