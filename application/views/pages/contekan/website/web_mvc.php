<!-- web mvc -->
<div class="content-wrapper">
   <!-- Sidebar  -->
   <?php $this->load->view('layouts/_sidebar_website'); ?>
   <!-- akhir sidebar -->

   <!-- ########## judul ########## -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mx-1">
            <div class="col-sm-6">
               <h3 class="font-weight-bold text-gray"><i class="far fa-fw fa-circle"></i></i> WEB MVC</h3>
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
      <h5>Sesuai dengan singkatannya MVC merupakan: modals, views dan contrllers.</h5>
      <h5>MVC bekerja di bagian halaman utama (MAIN) dari sebuah website.</h5>
      <h5>Codeigniter sudah menyediakan fasilitas MVC di dalamnya bisa kita lihat dalam folder application terdapat folder controllers, modals, dan views.</h5>
      <h5>Pada dasarnya apa yang dilakukan didalam computer tidak semuanya ditampilan ke layar monitir, hanya bagian view saja yang akan ditampilkan.</h5>
      <h5>Dengan adanya sistem MVC maka kita akan lebih mudah melakukan coding karena area coding kita pisahkan menjadi 3 bagian sesuai fungsinya:</h5>
      <h5>- Controllers: sesuai namanya adalah tempat menyimpan file control yang menghubungkan antara model dan viewnya.</h5>
      <h5>- Modals: hanya untuk menyimpan file rumus-rumus atau hitungan yang biasa disebut method dalam bahasa coding, termasuk method untuk mengelola database yang kita dalam phpMyAdmin.</h5>
      <h5>- Views: hanya untuk menyimpan coding yang digunakan untuk dimpilkan ke layar monitor saja.</h5>
      <br>
      <h5>Pada akhirnya semuanya tergantung kita sendiri untuk memilih dipisahkan atau tetap jadi 1, pilih mana yang lebih mudah buat kita, semuanya dapat berjalan asalkan gak salah coding <i class="far fa-grin-beam"></i></h5>
      <br><br>
      <hr>
      <h5><a href="<?= base_url('codeigniter_core') ?>">Codeigniter - core</a></h5>
   </div>
   <!-- ### akhir halaman ### -->
   <br><br>
   <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
   </a>
</div>
<!-- akhir web mvc -->