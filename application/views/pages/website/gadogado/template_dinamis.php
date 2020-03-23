<!-- web template dinamis -->
<div class="content-wrapper">
	<!-- Sidebar  -->
	<?php $this->load->view('layouts/_sidebar_website'); ?>
	<!-- akhir sidebar -->

	<!-- ########## judul ########## -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mx-1">
				<div class="col-sm-6">
					<h3 class="font-weight-bold text-gray"><i class="far fa-fw fa-circle"></i> Template Dinamis</h3>
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
						<!-- template dinamis -->
						<div class="tab-pane fade show active" id="vert-tabs-right-1" role="tabpanel" aria-labelledby="vert-tabs-right-1-tab">
							<h5>Pada umumnya sebuah halaman website, terdapat kerangka dasar <a href="<?= base_url('html/kerangka_dasar') ?>" target="_blank">HTML</a>, head dan body</h5>
							<h5>Dalam body merupakan tempat coding untuk membuat sebuah halaman website.</h5>
							<h5>Template dinamis merupakan pemisahan struktur <a href="<?= base_url('html/kerangka_dasar') ?>" target="_blank">HTML</a> yang terdapat pada suatu halaman website.</h5>
							<h5>Tidak ada ketentuan pasti, berapa banyak halaman itu akan dipotong, yang terpenting tidak ada bagian yang hilang dan pada saat memangil halaman itu harus berurutan sesuai potongannya.</h5>
							<br>
							<h5>Tujuan dari pemipisahan menjadi beberapa bagian untuk memudahkan kita dalam mengerjakan coding . asal jangan memotong ditengah codingan, wah ini tambah ribet nanti <i class="far fa-grin-beam"></i> .</h5>
							<h5>Biasanya dipisahkan berdasarkan kelompok codingannya seperti, navbar, sidebar dan footer tergantung dari bentuk website itu sendiri.</h5>
							<h5>Dengan pemisahan bagian ini maka kita cuman berurusan dengan MAIN yang merupakan halaman utama dari sebuah halaman website, hal ini akan sangat memudahkan kita dalam melakukan coding, setidaknya halaman coding jadi lebih pendek dan simpel.</h5>
							<br>
							<h5>Hasil dari pemotongan semuanya akan ditempatkan dalam folder views,</h5>
							<h5>1. Buat forder baru dalam forlder views dengan nama templates atau layouts sama aja, kedua nama ini yang biasa digunakan, untuk menempatkan header,navbar, sidebar dan footer.</h5>
							<h5>2. Untuk MAIN atau halaman utama karena jumlahnya banyak, kita buatkan forder masing-masing sesuai stuktur dari website kita agar mudah mencarinya.</h5>
							<div class="card p-1 shadow col-md-6">
								<img src="<?= base_url('./images/website/web_template_dinamis.jpg') ?>" class="img-fluid" alt="">
							</div>
							<br>
							<h5>Untuk merangkai kembali saat menampilkan halaman website seutuhnya, akan dilakukan di bagian controllers, inilah salah satu fungsi dari controller.</h5>
							<h5>Dan yang terpenting harus berurutan sesuai urutan pemotongan yang kita buat.</h5>
							<h5>Sampai disini pengertian soal template dinamis, untuk melengkapi sebaiknya baca bagian <a href="<?= base_url('codeigniter/mvc') ?>" target="_blank">MVC</a>, hal ini perlu dibahas di bagian terpisah.</h5>
						</div>
						<!-- link dinamis -->
						<div class="tab-pane fade" id="vert-tabs-right-2" role="tabpanel" aria-labelledby="vert-tabs-right-2-tab">
							<h5>Kita akan gunakan halaman HOME untuk membuat template dinasmis, buka app../views/home.php sesuai aturan MVC halaman web ditempatkan di folder views.</h5>
							<h5>1. lihat bagian header dan footer ada 2 jenis link:</h5>
							<h5>- link ke folder lain, berarti data ada di dalam website kita.</h5>
							<h5>- link ke website (yang pakai http://..) berarti kita harus terhubung dengan internet karena data nya diambil dari website lain, jika website ini ditutup maka kita tidak dapat menggunakan data ini lagi.</h5>
							<div class="card p-1 shadow col-md-11">
								<img src="<?= base_url('images/website/bootstrap-setting.jpg') ?>" class="img-fluid" alt="">
							</div>
							<h5>2. Yang kita ubah hanyalah link yang ke folder, tergantung kita meletakkan posisi data dengan halaman website nya, jika mengikuti cara yang ada di tutorial ini maka :
								../../assets/ ubah jadi assets/ </h5>
							<h5>Contoh perubahan link nya:</h5>
							<h5>&ltlink rel="stylesheet" href="../../dist/css/adminlte.min.css"&gt menjadi</h5>
							<h5>&ltlink rel="stylesheet" href="assets/bootstrap/dist/css/adminlte.min.css"&gt</h5>
							<h5>assets dan bootstrap adalah folder yang kita buat tadi.</h5>
							<h5>3. Untuk membuat link ini dinamis tambahkan : </h5>
							<h5>Jika halaman home masih home.html harus diubah menjadi home.php</h5>
							<h5>&ltlink rel="stylesheet" href="<code>&lt?= base_url() ?&gt</code> assets/bootstrap/dist/css/adminlte.min.css"&gt</h5>
							<h5>Harus ditambahkan pada semua link forder di bagian header dan footer nya.</h5>
							<h5>4. Intinya kita harus tetap mengembalikan koneksi antar halaman website dengan data yang tersimpan di file lain, supaya semua data penunjangnya dapat dipanggil atau digunakan.</h5>
							<h5>5. Sistem folder dalam website sama persis dengan sistem folder yang ada di FILE MANAGER pada computer kita, tanda ../ untuk naik 1 folder.</h5>
							<h5>Bila tampilan website sudah rapi dan kembali seperti semula berarti semua link sudah terhubung dengan benar.</h5>
						</div>
						<br><br>
					</div>
				</div>

				<!-- bagian taps  -->
				<div class="col-3 col-dm-3">
					<div class="nav flex-column nav-tabs nav-tabs-right h-100" id="vert-tabs-right-tab" role="tablist" aria-orientation="vertical">
						<!-- intro -->
						<a class="nav-link active" id="vert-tabs-right-1-tab" data-toggle="pill" href="#vert-tabs-right-1" role="tab" aria-controls="vert-tabs-right-1" aria-selected="false">Template Dinamis</a>
						<!-- grid -->
						<a class="nav-link" id="vert-tabs-right-2-tab" data-toggle="pill" href="#vert-tabs-right-2" role="tab" aria-controls="vert-tabs-right-2" aria-selected="false">Link Dinamis</a>
					</div>
				</div>
			</div>
		</div>
		<!-- ### akhir navtaps ### -->
	</div>
	<!-- ### akhir halaman ### -->
	<br><br>
	<a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
		<i class="fas fa-chevron-up"></i>
	</a>
</div>
<!-- akhir web template dinamis -->