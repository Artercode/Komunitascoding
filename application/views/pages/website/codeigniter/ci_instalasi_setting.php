<!-- codeigniter setting -->
<div class="content-wrapper">
	<!-- Sidebar  -->
	<?php $this->load->view('layouts/_sidebar_website'); ?>
	<!-- akhir sidebar -->

	<!-- ########## judul ########## -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mx-1">
				<div class="col-sm-6">
					<h3 class="font-weight-bold text-gray"><i class="fab fa-fw fa-free-code-camp"></i> Codeigniter - Instalasi - Setting</h3>
				</div>
				<!-- info -->
				<div class="h2 col-sm-6">
					<a class="float-sm-right" href="#" id="dropdown" data-toggle="dropdown">
						<i class="fas fa-fw fa-exclamation-circle"></i>
					</a>
					<!-- Dropdown info -->
					<div class="p-4 dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="dropdown">
						<h6>1. Bila ada salah ketik atau kurang lengkap </h6>
						<h6> sampaikan ke admin akan segera kami perbaiki.</h6>
						<h6>2. Bila ada cara yang lebih baik, mudah dan cepat, </h6>
						<h6> untuk mempelajari infokan ke admin. <a href="<?= base_url('/') ?>"><kbd>Kontak</kbd></a></h6>
						<h6>3. Ide dan koreksi sangat berharga buat kami.</h6>
						<h6>4. Semoga bermanfaat buat kita semua.</h6>
						<h6>5. Terima kasih atas supportnya untuk Komunitascoding.</h6>
					</div>
				</div>
				<!-- akhir info -->
			</div>
		</div>
	</section>
	<!-- ### akhir judul ### -->

	<!-- ########## halaman ########## -->
	<div class="col-lg-11 mt-n2 container-fluid">
		<!-- ########## novtaps ############################################################# -->
		<div class="card card-body card-primary card-outline">
			<div class="row">
				<!-- bagian ulasan -->
				<div class="col-9 col-dm-9">
					<div class="tab-content" id="vert-tabs-right-tabContent">
						<!-- instalasi -->
						<div class="tab-pane fade show active" id="vert-tabs-right-1" role="tabpanel" aria-labelledby="vert-tabs-right-1-tab">
							<div class="h5">
								1.. Download Codeigniter: <a href="https://codeigniter.com/download" target="_blank">https://codeigniter.com/download</a> <br>
								2.. Extrak zip filenya dan ganti nama forder seperti nama projek kita.
								3.. Pindahkan folder projek anda ke dalam folder htdocs yang ada di Xampp (../xampp/htdocs/projek_kita). <br>
								4.. Jalankan Xampp, jalankan Apache dan MySql untuk databasenya. <br>
								5.. Jalankan Codeigniter nya di browser dengan menetikkan <a href="" target="_blank">localhost/nama-projek/</a> yang telah dibuat <br>
								6.. Kita sudah berhasil menginstal Codeigniter. <br>
							</div>
						</div>
						<!-- menghapus index.php di url -->
						<div class="tab-pane fade" id="vert-tabs-right-2" role="tabpanel" aria-labelledby="vert-tabs-right-2-tab">
							<h5>Dengan membuat file .htaccess (Tanpa extension) di folder projek, sejajar dengan folder application dll</h5>
							<h5>Buka application/config/config.php</h5>
							<h5>-- [38] $config['index_page'] = ''; (hapus index.php nya)</h5>
							<div class="card p-1 shadow col-md-6">
								<img src="<?= base_url('images/website/codeigniter-setting2.jpg') ?>" class="img-fluid" alt="">
							</div>
							<h5><a href="https://codeigniter.com/user_guide/general/urls.html?highlight=htaccess" target="_blank">https://codeigniter.com/user_guide/general/urls.html?highlight=htaccess</a></h5>
							atau:
							<pre>
	RewriteEngine on

	Options All -Indexes
	IndexIgnore *
	RewriteCond %{REQUEST_FILENAME} !-f
	RewriteCond %{REQUEST_FILENAME} !-d
	RewriteRule ^(.*)$ index.php/$1 [L]

	&ltifmodule mod_headers.c=""&gt
	SetEnvIf Origin "^(.*\.<kbd>nama-domain</kbd>\.com)$" ORIGIN_SUB_DOMAIN=$1
	Header set Access-Control-Allow-Origin "%{ORIGIN_SUB_DOMAIN}e" env=ORIGIN_SUB_DOMAIN
	Header set Access-Control-Allow-Methods: "*"
	Header set Access-Control-Allow-Headers: "Origin, X-Requested-With, Content-Type, Accept, Authorization"
	&lt/ifmodule&gt
	</pre>
						</div>
						<!-- membuat halaman home -->
						<div class="tab-pane fade" id="vert-tabs-right-3" role="tabpanel" aria-labelledby="vert-tabs-right-3-tab">
							<div class="h5">
								Buka application/config/config.php <br>
								-- [26] $config['base_url'] = 'http://localhost/folder-projek/'; <br>

								<div class="card p-1 shadow col-md-6">
									<img src="<?= base_url('images/website/codeigniter-setting.jpg') ?>" class="img-fluid" alt="">
								</div>
								<br>
								Mengarahkan ke halaman home <br>
								Buka application/cofig/routes.php <br>
								-- [52] $route['default_controller'] = 'home'; <br>
								-- Di dalam views dan controllers ada file Welcome.php dan welcome.php perhatikan huruf depannya, itu syarat dari CI yang membedakan file control atau file view <br>
								-- Di controllers ubah nama file Welcome.php menjadi Home.php dan isinya <code>class Home extends CI_Controller</code> <br>
								-- Di views ubah nama file welcome.php menjadi home.php (huruf depan kecil untuk menandakan ini file view) <br>
								Lihat di browser <code>localhost/Nama-projek/home</code> bila tampil welcome CI berarti kita sudah menampilkan halaman home. <br>
							</div>
						</div>
						<!-- setting autoload -->
						<div class="tab-pane fade" id="vert-tabs-right-4" role="tabpanel" aria-labelledby="vert-tabs-right-4-tab">
							<div class="h5">
								Buka application/config/autoload.php <br>
								(setting libraries dan helper yang biasa kita gunakan) <br>
								-- [61] $autoload['libraries'] = array('database', 'session', '<code>nama</code>'); <br>
								-- [92] $autoload['helper'] = array('url', 'form', 'file', 'security', '<code>nama</code>');
								<br><br>
								Cara kerja autoload, dia akan menjalankan semua apa yang kita autoload pada saat kita membuka halaman website, di semua halaman website, OKI sebaiknya untuk : <br>
								-- Form_validation di load manual saja di halaman web yang membutuhkan saja, karena file nya berat jika tidak maka kerja server akan berat. <br>
								-- Email juga sebaiknya load manual di dalam method saat dibutuhkan.
								<br><br>
								Selain itu kita juga bisa membuat libraries atau helper sendiri, <br>
								-- Harus ditempatkan dalam forder masing2 cari di bagian application/libraries dan application/helper. <br>
								-- Aturan nama nya: nama_library.php atau nama_helper.php <br>
								-- Sesudah itu jangan lupa di load di autoload masing2 untuk menghubungkannya <br>
								Untuk data lengkapnya: <a href="https://codeigniter.com/user_guide/index.html" target="_blank">https://codeigniter.com/user_guide/index.html</a> <br>
								<br><br>
								<div class="card p-3 bg-gradient-info shadow">
									<h5><i class="fas fa-fw fa-chess-board"></i> Ilustrasi</h5>
									<h5>Jika menggunakan template yang sudah jadi, kurangi script link di bagian head atau footer yang tidak terpakai, untuk meringankan kerja server.</h5>
								</div>
							</div>
						</div>
						<!-- setting config -->
						<div class="tab-pane fade" id="vert-tabs-right-5" role="tabpanel" aria-labelledby="vert-tabs-right-5-tab">
							<div class="h5">
								Buka application/config/config.php <br>
								Untuk Localhost <br>
								-- [29] $config['base_url'] = 'http://localhost/komunitascoding/'; <br>
								Untuk hosting <br>
								-- [29] $config['base_url'] = 'http://komunitascoding.com/'; <br>
								<br>
								-- [38] $config['index_page'] = ''; (hapus index.php) <br>
								<br>
							</div>
						</div>
						<!-- setting database -->
						<div class="tab-pane fade" id="vert-tabs-right-6" role="tabpanel" aria-labelledby="vert-tabs-right-6-tab">
							<div class="h5">
								Buka application/config/database.php <br>
								-- [79] 'username' => 'root', <br>
								-- [80] 'password' => '', <br>
								-- [81] 'database' => 'nama-folder-database', (harus sama dengan nama folder tabel yang di phpMyAdmin)
								<br><br>
								Untuk setting database minimal kita sudah membuat folder data di dalam phpMyAdmin, tanpa ada tabel didalamnya tidak apa. <br>
								Jika tidak akan error karena CI tidak dapat menemukan folder database.
								<br><br>
								Username dan password : <br>
								-- Untuk window username 'root' dan password 'tidak pakai' <br>
								-- Untuk OS username 'root' dan password 'root' <br>
								-- Untuk linux username 'root' dan password '' (bisa di set sesuai keinginan kita) <br>
							</div>
						</div>
						<br><br>
					</div>
				</div>

				<!-- bagian taps  -->
				<div class="col-3 col-dm-3">
					<div class="nav flex-column nav-tabs nav-tabs-right h-100" id="vert-tabs-right-tab" role="tablist" aria-orientation="vertical">
						<!-- instalasi -->
						<a class="nav-link active" id="vert-tabs-right-1-tab" data-toggle="pill" href="#vert-tabs-right-1" role="tab" aria-controls="vert-tabs-right-1" aria-selected="false">Instalasi</a>
						<!-- menghapus index.php di url -->
						<a class="nav-link" id="vert-tabs-right-2-tab" data-toggle="pill" href="#vert-tabs-right-2" role="tab" aria-controls="vert-tabs-right-2" aria-selected="false">Menghapus index.php di url</a>
						<!-- membuat halaman home -->
						<a class="nav-link" id="vert-tabs-right-3-tab" data-toggle="pill" href="#vert-tabs-right-3" role="tab" aria-controls="vert-tabs-right-3" aria-selected="false">Membuat halaman Home</a>
						<!-- setting autoload -->
						<a class="nav-link" id="vert-tabs-right-4-tab" data-toggle="pill" href="#vert-tabs-right-4" role="tab" aria-controls="vert-tabs-right-4" aria-selected="false">Setting Autoload</a>
						<!-- setting config -->
						<a class="nav-link" id="vert-tabs-right-5-tab" data-toggle="pill" href="#vert-tabs-right-5" role="tab" aria-controls="vert-tabs-right-5" aria-selected="false">Setting Config</a>
						<!-- setting database -->
						<a class="nav-link" id="vert-tabs-right-6-tab" data-toggle="pill" href="#vert-tabs-right-6" role="tab" aria-controls="vert-tabs-right-6" aria-selected="false">Setting Database</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ### akhir halaman ### -->
	<br><br>
	<a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
		<i class="fas fa-chevron-up"></i>
	</a>
</div>
<!-- akhir codeigniter setting -->