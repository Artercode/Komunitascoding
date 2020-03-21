<!-- xampp -->
<div class="content-wrapper">
   <!-- Sidebar  -->
   <?php $this->load->view('layouts/_sidebar_website'); ?>
   <!-- akhir sidebar -->

   <!-- ########## judul ########## -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mx-1">
            <div class="col-sm-6">
               <h3 class="font-weight-bold text-gray"><i class="fas fa-fw fa-bone"></i> Xampp</h3>
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
                  <h6> untuk mempelajari infokan ke admin. <a href="<?= base_url('selamat_datang') ?>"><kbd>Kontak</kbd></a></h6>
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
      <h5>1. Download Xampp: <a href="https://www.apachefriends.org/download.html" target="_blank">https://www.apachefriends.org/download.html</a></h5>
      <h5>- Gak ada yang sulit saat instal, ikuti aja seperti biasa.</h5>
      <h5>2. Jalankan: Apache dan MySQL.</h5>
      <h5>- Apache = menjalankan localhost (untuk melihat hasil web kita di browser)</h5>
      <h5>- MySQL = menjalankan phpMyAdmin di computer kita (untuk penyimpanan database)</h5>
      <h5> Start yang kita butuh kan Apache dan MySQL nya</h5>
      <div class="card p-1 shadow col-md-6">
         <img src="<?= base_url('./images/website/xampp.jpg') ?>" class="img-fluid" alt="">
      </div>
      <h5>3. Coba jalankan website kita di browser http://localhost/nama_projek</h5>
      <h5>(nama_projek = nama folder website yang telah kita buat di dalam folder xampp/htdocs)</h5>
      <h5>4. Cara memanggil phpMyAdmin di browser http://localhost/phpmyadmin/</h5>
      <h5>5. localhost dan phpMyAdmin sudah siap digunakan.</h5>
      <br>
      <h5>Usahakan selalu menggunakan versi terbaru. Untuk cek versi:</h5>
      <div class="card p-1 shadow col-md-6">
         <img src="<?= base_url('./images/website/xampp_versi.jpg') ?>" class="img-fluid" alt="">
      </div>
   </div>
   <!-- ### akhir halaman ### -->
   <br><br>
   <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
   </a>
</div>
<!-- akhir xampp -->