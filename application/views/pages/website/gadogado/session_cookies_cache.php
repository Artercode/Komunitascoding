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
               <h3 class="font-weight-bold text-gray"><i class="nav-icon far fa-circle"></i> Session|Cookies|Cache</h3>
            </div>
            <!-- info -->
            <div class="h2 col-sm-6">
               <a class="float-sm-right" href="#" id="dropdown" data-toggle="dropdown">
                  <i class="fas fa-fw fa-exclamation-circle"></i>
               </a>
               <!-- Dropdown info -->
               <div class="p-4 dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="dropdown">
                  <div class="h6">
                     1. Bila ada salah ketik atau kurang lengkap, sampaikan ke admin akan segera kami perbaiki. <br>
                     2. Bila ada cara yang lebih baik, mudah dan cepat, untuk mempelajari infokan ke admin. <a href="<?= base_url('/') ?>"><kbd>Kontak</kbd></a> <br>
                     3. Ide dan koreksi sangat berharga buat kami. <br>
                     4. Semoga bermanfaat buat kita semua. <br>
                     5. Terima kasih atas supportnya untuk Komunitascoding.
                  </div>
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
                  <!-- session -->
                  <div class="tab-pane fade show active" id="vert-tabs-right-1" role="tabpanel" aria-labelledby="vert-tabs-right-1-tab">
                     <div class="h5">
                        1. Pada saat login maka data session akan dibuat dan dimuat di setiap halaman website, termasuk halaman yang tidak memerlukan login untuk memasukinya. <br>
                        Data session inilah yang dibutuhkan untuk mengakses halaman privat. jika logout maka session akan dihapus karena isi method dari logout itu sendiri adalah method untuk menghapus session supaya tidak digunakan orang lain. <br>
                        2. Data session yang ada hanyalah data yang kita inputkan saat login, umumnya hanya username dan password saja, dan bisa set ulang sesuai kebutuhan kita. <br>
                        3. Data session tersimpan di website dan browser, dan session akan hilang beberapa saat (sesuai setting) secara automatis saat browser kita tutup, atau akan hilang pada saat logout karena fungsi logout untuk menghapus session. <br>
                        4. Jika kita membuka 2 website di dalam 1 server misalnya localhost, maka kedua website akan memiliki kedua session tersebut. <br>
                        5. Siapa yang mengelola session CI atau php sama saja, fungsi sama cuman cara coding aja yang berbeda, pada saat ini ditulis CI memiliki sedikit kelebihan. <br>
                     </div>
                  </div>
                  <!-- cookies -->
                  <div class="tab-pane fade" id="vert-tabs-right-2" role="tabpanel" aria-labelledby="vert-tabs-right-2-tab">
                     <div class="h5">
                        1. Cookies sama saja fungsinya dengan Session, cuman pengunaannya yang berbeda. tujuannya mencatat jejak kita selama membuka brower atau website. <br>
                        2. cookies di brower bisa kita lihat di history dan untuk menghapus kita harus menghapusnya secara manual di brower. <br>
                        3. Terkadang website juga memerlukan cookies selain session karena session dikhusus kan saat kita login, biasanya untuk notifikasi dll. <br>
                        4. Intinya apapun yang kita lakuan di web atau secara online ada jejaknya <i class="far fa-grin-beam"></i> <br>
                     </div>
                  </div>
                  <!-- cache -->
                  <div class="tab-pane fade" id="vert-tabs-right-3" role="tabpanel" aria-labelledby="vert-tabs-right-3-tab">
                     <h5>1. <i class="far fa-grin-beam"></i></h5>

                  </div>
                  <br><br>
               </div>
            </div>

            <!-- bagian taps  -->
            <div class="col-3 col-dm-3">
               <div class="nav flex-column nav-tabs nav-tabs-right h-100" id="vert-tabs-right-tab" role="tablist" aria-orientation="vertical">
                  <!-- session -->
                  <a class="nav-link active" id="vert-tabs-right-1-tab" data-toggle="pill" href="#vert-tabs-right-1" role="tab" aria-controls="vert-tabs-right-1" aria-selected="false">Session</a>
                  <!-- cookies -->
                  <a class="nav-link" id="vert-tabs-right-2-tab" data-toggle="pill" href="#vert-tabs-right-2" role="tab" aria-controls="vert-tabs-right-2" aria-selected="false">Cookies</a>
                  <!-- cache -->
                  <a class="nav-link" id="vert-tabs-right-3-tab" data-toggle="pill" href="#vert-tabs-right-3" role="tab" aria-controls="vert-tabs-right-3" aria-selected="false">Cache</a>
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
<!-- akhir xampp -->