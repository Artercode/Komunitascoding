<!-- Content home -->
<div class="content-wrapper">
	<!-- Sidebar  -->
	<?php $this->load->view('layouts/_sidebar'); ?>
	<!-- akhir sidebar -->

	<div class="container">
		<!-- ########## komunitascoding ########## -->
		<div class="row">
			<div class="mt-2 col text-center">
				<h1 class="mb-n1">Komunitas codinG</h1>
				<h4 class="mb-n1">Selalu dikembangkan</h4>
				<span style="color: salmon">Update : 29-03-20</span>
			</div>
		</div>
		<!-- ### akhir komunitascoding ### -->

		<!-- ########## collapse ########## -->
		<div class="mt-3 accordion" id="accordionKepala">
			<!-- ########## selayang pandang ########## -->
			<div class="card">
				<!-- kepala pertama -->
				<div class="card-header" id="headingOne">
					<div class="my-n2 huruf text-center">
						<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							<h2 class="pt-2">Selayang Pandang</h2>
						</button>
					</div>
				</div>
				<!-- ulasan selayang pandang -->
				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionKepala">
					<div class="card-body bg-info">
						<div class="row">
							<div class="col-sm-12 col-lg-6">
								<p class="text-md-right">Komunitas coding merupakan penghubung para coder, guna menemukan patner untuk membentuk sebuah grup coder yang diharapkan akan menjadi awal sebuah start up buat kalian semua.</p>
							</div>
							<div class="col-sm-12 col-lg-6">
								<p>Komunitas coding merupakan tempat untuk berkomunikasi, komunikasi merupakan hal yang sangat penting dalam kehidupan, melalui komunikasi dengan orang lain maka anda sudah 80% sukses.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ### akhir selayang pandang ### -->

			<!-- ########## ilustrasi ########## -->
			<div class="card mt-n2">
				<!-- kepala kedua -->
				<div class="card-header" id="headingTwo">
					<div class="my-n2 text-center">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							<h2 class="pt-2"><i class="fas fa-fw fa-chess-board"></i> Ilustrasi</h2>
						</button>
					</div>
				</div>
				<!-- ulasan ilustrasi -->
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionKepala">
					<div class="card-body bg-info">
						<div class="row">
							<div class="col-sm-12 col-lg-6 light">
								Ilustrasi dengan icon papan catur adalah: <br>
								ilustrasi gaya komuditascoding untuk menjelaskan soal coding. <Br>
								Bila di bagian website menemukan icon <i class="fas fa-fw fa-chess-board"></i> berarti ada
								ilustrasinya. <br>
								Disini kami tidak menjelaskan cara bermain catur <i class="far fa-fw fa-grin-beam"></i> maaaf <i class="far fa-fw fa-grin-beam"></i>
								<br><br>
								Komunitascoding menggunakan papan catur sebagai bahan ilustrasi
								untuk pola pikir karena sangat mirip dengan cara pengcodingan. <br>
								Dengan memahami pola pikir akan sangat mudah untuk mempelajari coding. <br>
								Dan pola pikir computer sangat mirip dengan pola pikir manusia karena semua bahasa coding dibuat
								oleh manusia <i class="far fa-fw fa-grin-beam"></i> <br><br>
							</div>

							<div class="col-sm-12 col-lg-6 light">
								Mempelajari coding sangat lah mudah <br>
								Hanya ada 2 hal yang perlu diperhatikan: <br>
								- pola pikir <br>
								- Menghafalkan syntak, bagian ini buat contekan aja <i class="far fa-fw fa-grin-beam"></i>
								<br><br>
								Kami akan memberikan ilustrasi tentang pola pikir. <br>
								Pasti kalian bertanya soal logika dalam pengcodingan, <br>
								logika akan terbentuk dengan sendirinya apabila kalian sudah paham
								soal pola pikir. <br><br>
								<a type="submit" class="btn btn-primary float-right" href="<?= base_url('selamat_datang/note') ?>">Siap untuk mempelajari Pola Pikir </a>
							</div>
						</div>
					</div>
				</div>
				<!-- akhir bagian kedua -->
			</div>
			<!-- ### akhir ilustrasi ### -->
		</div>
		<!-- ### akhir collapse ### -->

		<!-- ########## kontak ########## -->
		<div class="row">
			<div class="col text-center">
				<h6>Kami membutuhkan saran & ide kalian untuk mengembangkan komunitascoding, terima kasih.</h6>
				<h6>Bagi yang berminat gabung kalian bisa langsung kontak via telegram, kami membutuhkan bantuan kalian <i class="far fa-grin-beam"></i>
				</h6>
				<h5 class="mr-3">Kontak : <i class="fab fa-telegram"></i></i> +62 813 9504 5438 - Arter </h5>
			</div>
		</div>
		<!-- ### akhir kontak ### -->
	</div>
</div>
</div>
<!-- akhir content home -->