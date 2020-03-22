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
					<h3 class="font-weight-bold text-gray"><i class="far fa-fw fa-window-maximize"></i> Codeigniter - Instalasi - Setting</h3>
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
							<h5>1. Download Codeigniter: <a href="https://codeigniter.com/download" target="_blank">https://codeigniter.com/download</a></h5>
							<h5>2. Extrak zip filenya dan ganti nama forder seperti nama projek kita.</h5>
							<h5>3. Pindahkan folder projek anda ke dalam folder htdocs yang ada di Xampp (../xampp/htdocs/projek_kita). </h5>
							<h5>4. Jalankan Xampp, jalankan Apache dan MySql untuk databasenya.</h5>
							<h5>5. Jalankan Codeigniter nya di browser dengan menetikkan <a href="" target="_blank">localhost/nama-projek/</a> yang telah dibuat</h5>
							<h5>6. Kita sudah berhasil menginstal Codeigniter.</h5>
						</div>
						<!-- menghapus index.php di url -->
						<div class="tab-pane fade" id="vert-tabs-right-2" role="tabpanel" aria-labelledby="vert-tabs-right-2-tab">
							<h5>Dengan membuat file .htaccess (Tanpa extension) di folder projek, sejajar dengan folder application dll</h5>
							<h5>Buka application/config/config.php</h5>
							<h5>- [38] $config['index_page'] = ''; (hapus index.php nya)</h5>
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
							<h5>Buka application/config/config.php</h5>
							<h5>- [26] $config['base_url'] = 'http://localhost/folder-projek/';</h5>

							<div class="card p-1 shadow col-md-6">
								<img src="<?= base_url('images/website/codeigniter-setting.jpg') ?>" class="img-fluid" alt="">
							</div>
							<br>
							<h5>Mengarahkan ke halaman home</h5>
							<h5>Buka application/cofig/routes.php</h5>
							<h5>- [52] $route['default_controller'] = 'home';</h5>
							<h5>- Di dalam views dan controllers ada file Welcome.php dan welcome.php perhatikan huruf depannya, itu syarat dari CI yang membedakan file control atau file view</h5>
							<h5>- Di controllers ubah nama file Welcome.php menjadi Home.php dan isinya <code>class Home extends CI_Controller</code></h5>
							<h5>- Di views ubah nama file welcome.php menjadi home.php (huruf depan kecil untuk menandakan ini file view)</h5>
							<h5>Lihat di browser <code>localhost/Nama-projek/home</code> bila tampil welcome CI berarti kita sudah menampilkan halaman home.</h5>
						</div>
						<!-- setting autoload -->
						<div class="tab-pane fade" id="vert-tabs-right-4" role="tabpanel" aria-labelledby="vert-tabs-right-4-tab">
							<h5>Buka application/config/autoload.php (setting libraries dan helper yang biasa kita gunakan)</h5>
							<h5>- [61] $autoload['libraries'] = array('database', 'email', 'session', 'form_validation', '<code>nama</code>');</h5>
							<h5>- [92] $autoload['helper'] = array('url', 'form', 'file', 'security', '<code>nama</code>');</h5>
							<h5>Cara kerja autoload, dia akan menjalankan semua apa yang kita autoload pada saat kita membuka halaman website, di semua halaman website, OKI sebaiknya untuk form_validation karena file nya berat sebaiknya di load manual saja di halaman web yang membutuhkan saja, jika tidak maka kerja server akan berat.</h5>
							<h5>Selain itu kita juga bisa membuat libraries atau helper sendiri,</h5>
							<h5>- Harus ditempatkan dalam forder masing2 cari di bagian application/libraries dan application/helper.</h5>
							<h5>- Aturan nama nya: nama_library.php atau nama_helper.php</h5>
							<h5>- Sesudah itu jangan lupa di load di autoload masing2 untuk menghubungkannya</h5>
							<h5>Untuk data lengkapnya: <a href="https://codeigniter.com/user_guide/index.html" target="_blank">https://codeigniter.com/user_guide/index.html</a></h5>
						</div>
						<!-- setting database -->
						<div class="tab-pane fade" id="vert-tabs-right-5" role="tabpanel" aria-labelledby="vert-tabs-right-5-tab">
							<h5>Buka application/config/database.php</h5>
							<h5>- [79] 'username' => 'root',</h5>
							<h5>- [80] 'password' => '',</h5>
							<h5>- [81] 'database' => 'nama-folder-database', (harus sama dengan nama folder tabel yang di phpMyAdmin)</h5>
							<h5>Database dalam phpMyAdmin, harus dibuat terlebih dahulu, jika tidak akan terjadi error, setidaknya buat folder dulu meskipun belum ada tabelnya.</h5>
							<h5> jika belum ada database atau tidak menggunakan database dikosongkan saja.</h5>
							<h5>- Untuk window username 'root' dan password 'tidak pakai'</h5>
							<h5>- Untuk OS username 'root' dan password 'root'</h5>
							<h5>- Untuk linux username 'root' dan password '' (bisa di set sesuai keinginan kita)</h5>
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
						<!-- setting database -->
						<a class="nav-link" id="vert-tabs-right-5-tab" data-toggle="pill" href="#vert-tabs-right-5" role="tab" aria-controls="vert-tabs-right-5" aria-selected="false">Setting Database</a>
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