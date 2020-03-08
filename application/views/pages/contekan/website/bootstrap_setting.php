<!-- bootstrap setting -->
<div class="content-wrapper">
   <!-- Sidebar  -->
   <?php $this->load->view('layouts/_sidebar_website'); ?>
   <!-- akhir sidebar -->

   <!-- ########## judul ########## -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mx-1">
            <div class="col-sm-6">
               <h3 class="font-weight-bold text-gray"><i class="fab fa-fw fa-bootstrap"></i> Bootstrap - Setting</h3>
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
      <h5>Sampai di sini, kita akan membuat halaman home yang ditempatkan di</h5>
      <h5>app../views/home.php sesuai aturan yang ada dari CI.</h5>
      <h5>1. Kita bisa copy halaman home bootstrap, paste di dalam forder views dan ganti namanya dengan home.php</h5>
      <h5>2. Di bagian header dan footer ada 2 jenis link:</h5>
      <h5>- link ke folder lain dan</h5>
      <h5>- link ke website (yang pakai http://..)</h5>
      <div class="card p-1 shadow col-md-11">
         <img src="<?= base_url('images/website/bootstrap-setting.jpg') ?>" class="img-fluid" alt="">
      </div>
      <h5>3. Yang diubah hanyalah yang link ke folder dengan menambahkan dibagian depannya
         ./assets atau assets</h5>
      <h5> Tergantung dari posisi asal file terhadap link awal di bootstrap.</h5>
      <h5>Contoh perubahan link nya:</h5>
      <h5>&ltlink rel="stylesheet" href="../../assets/dist/css/adminlte.min.css"&gt menjadi</h5>
      <h5>&ltlink rel="stylesheet" href="./assets/dist/css/adminlte.min.css"&gt dan menambahkan</h5>
      <h5>&ltlink rel="stylesheet" href="<code>&lt= base_url() ?&gt</code>./assets/dist/css/adminlte.min.css"&gt</h5>
      <h5>Kita bisa menggunakan base_url karena kits sudah setting di bagian app../autoload.php</h5>
      <h5>pada baris [92] $autoload['helper'] = array('url', 'form', 'file', 'security');</h5>
      <h5>selengkapnya bisa lihat di
         <a href="<?= base_url('codeigniter_setting') ?>" target="_blank">Codeigniter Setting</a> nomor 4</h5>
      <h5>4. Harus ditambahkan pada semua link di bagian header dan footer nya.</h5>
      <h5>5. Intinya kita harus tetap mengembalikan koneksi antar file seperti pada templates aslinya.</h5>
      <h5>6. Sistem folder dalam website sama persis dengan sistem folder yang ada di FILE MANAGER pada computer kita.</h5>
      <h5>Bila tampilan website sudah rapi dan kembali seperti semula berarti semua link sudah terhubung dengan benar.</h5>
      <br>
      <h5>Selamat kita sudah berhasil mengintal dan setting bootstrap dengan lengkap.</h5>
   </div>
   <!-- ### akhir halaman ### -->
   <br><br>
   <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
   </a>
</div>
<!-- akhir bootstrap -->