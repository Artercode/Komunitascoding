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
               <h3 class="font-weight-bold text-gray"><i class="fab fa-free-code-camp"></i> Codeigniter MVC</h3>
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
      <!-- ########## novtaps ############################################################# -->
      <div class="card card-body card-primary card-outline">
         <div class="row">
            <!-- bagian ulasan -->
            <div class="col-9 col-dm-9">
               <div class="tab-content" id="vert-tabs-right-tabContent">
                  <!-- intro -->
                  <div class="tab-pane fade show active" id="vert-tabs-right-1" role="tabpanel" aria-labelledby="vert-tabs-right-1-tab">
                     <h5>Sesuai dengan namanya MVC : model, view dan controller.</h5>
                     <h5>MVC bekerja di bagian halaman utama (MAIN) dari sebuah website.</h5>
                     <h5>Codeigniter sudah menyediakan fasilitas MVC di dalamnya, bisa kita lihat dalam folder application terdapat folder controllers, modals, dan views.</h5>
                     <h5>Pada dasarnya apa yang dilakukan didalam computer tidak semuanya ditampilan ke layar monitor, hanya bagian view saja yang akan ditampilkan.</h5>
                     <h5>Dengan adanya sistem MVC maka kita akan lebih mudah melakukan coding karena area coding kita pisahkan menjadi 3 bagian sesuai fungsinya:</h5>
                     <h5>-- Controllers: sesuai namanya adalah tempat menyimpan file control yang menghubungkan antara model dan viewnya, semua prosess HARUS melalui controller terlebih dahulu.</h5>
                     <h5>-- Models: hanya untuk menyimpan file rumus-rumus atau hitungan yang biasa disebut method dalam bahasa coding, termasuk method untuk mengelola database yang kita tempatkan di phpMyAdmin.</h5>
                     <h5>-- Views: hanya untuk menyimpan coding yang digunakan untuk tampilan pada layar monitor saja.</h5>
                     <h5>Dalam hal ini bisa dikatakan untuk 1 halaman website akan memiliki controller, model, dan view masing-masing.</h5>
                     <br>
                     <h5>Pada akhirnya semuanya tergantung kita sendiri untuk memilih dipisahkan atau tetap jadi 1, pilih mana yang lebih memudahkan kita, semuanya dapat berjalan asalkan gak salah coding aja <i class="far fa-grin-beam"></i></h5>
                     <br>
                     <hr>
                     <h5><a href="<?= base_url('codeigniter/core') ?>" target="_blank">Codeigniter - core</a></h5>
                  </div>
                  <!-- controller -->
                  <div class="tab-pane fade" id="vert-tabs-right-2" role="tabpanel" aria-labelledby="vert-tabs-right-2-tab">
                     <div class="card p-1 shadow">
                        <img src="<?= base_url('images/website/codeigniter-mvc-controller.jpg') ?>" class="img-fluid" alt="">
                     </div>
                     <h5><b><code>VScode key: </code></b><kbd>controller + tab</kbd></h5>
                     <h5>-- Buat file dalam folder controllers, Contoh.php</h5>
                     <h5>-- Buka tag php <code>&lt?php</code> jangan lupa</h5>
                     <h5>-- Huruf depan controller harus huruf besar dan extends CI_controller</h5>
                     <h5>-- Semua harus lengkap, ini menjadikan file ini sebagai controller, nama disesuaikan dengan nama view nya sehingga mudah untuk mencari. misalnya: Home.php Beranda.php atau Login.php dll</h5>
                     <h5>-- public function index akan dijalankan secara otomatis bila kita memanggil controller ini, bagian yang harus ditampilkan secara otomatis hanyalah tampilan awal atau view nya.</h5>
                     <h5>-- Nama method dalam 1 file tidak boleh ada yang sama.</h5>
                     <br>
                     <div class="card p-3 bg-gradient-info shadow">
                        <h5><i class="fas fa-fw fa-chess-board"></i> Ilustrasi</h5>
                        <h5>Proses yang terjadi disini, apabila method dijalankan, controller akan mengambil tampilan dari view dan data bila ada ke Contoh_model.php untuk diproses oleh model dan hasilnya ditampilkan ke monitor oleh controller.</h5>
                     </div>
                  </div>
                  <!-- model -->
                  <div class="tab-pane fade" id="vert-tabs-right-3" role="tabpanel" aria-labelledby="vert-tabs-right-3-tab">
                     <div class="card p-1 shadow">
                        <img src="<?= base_url('images/website/codeigniter-mvc-model.jpg') ?>" class="img-fluid" alt="">
                     </div>
                     <h5><b><code>VScode key: </code></b><kbd>model + tab</kbd></h5>
                     <h5>-- Buat file dalam folder models, Contoh_model.php atau Contoh_m.php penambahan _model sebagai tanda bahwa file in adalah model.</h5>
                     <h5>-- Buka tag php <code>&lt?php</code> jangan lupa harus ada.</h5>
                     <h5>-- Huruf depan model harus huruf besar dan extends CI_model</h5>
                     <h5>-- Semua harus lengkap, ini menjadikan file ini sebagai model, nama disesuaikan dengan nama view nya sehingga mudah untuk mencari. misalnya: Home_model.php Beranda_model.php atau Login_model.php dll</h5>
                     <h5>-- Didalam model tidak ada method mengunakan nama INDEX, karena model hanya melakukan perhitungan atau eksekusi setelah ada permintaan dari controller.</h5>
                     <h5>-- Nama method dalam 1 file model juga tidak boleh ada yang sama, bisa bingung nanti computernya method mana yang mau dijalankan <i class="far fa-grin-beam"></i> .</h5>
                     <br>
                     <div class="card p-3 bg-gradient-info shadow">
                        <h5><i class="fas fa-fw fa-chess-board"></i> Ilustrasi</h5>
                        <h5>Extends CI_model ini menandakan semua rumusan atau method dalam file ini nantinya akan dieksekusi oleh CI. Sebenarnya fungsi-fungsi milik CI yang kita gunakan adalah method yang dimiliki oleh CI, jadi tidak ada extends CI_model atau extends CI_controller maka fungsi CI nya tidak dijalankan.</h5>
                     </div>
                  </div>
                  <!-- view -->
                  <div class="tab-pane fade" id="vert-tabs-right-4" role="tabpanel" aria-labelledby="vert-tabs-right-4-tab">
                     <h5>-- Buat file dalam folder views, contoh.php.</h5>
                     <h5>-- Huruf depan view harus huruf kecil, untuk menandakan ini file view.</h5>
                     <h5>-- Didalam view tidak ada tambahan apa-apa, isi hanya potongan template yang kita ambil dari bagian halaman utamanya saja (MAIN) hasil dari
                        <a href="<?= base_url('website/template_dinamis') ?>" target="_blank">pemecahan template</a>.</h5>
                     <br>
                     <div class="card p-3 bg-gradient-info shadow">
                        <h5><i class="fas fa-fw fa-chess-board"></i> Ilustrasi</h5>
                        <div class="card p-1 shadow">
                           <img src="<?= base_url('images/website/codeigniter-mvc-view2.jpg') ?>" class="img-fluid" alt="">
                        </div>
                        <h5>Ceritanya ini kita akan membuka halaman yang ada di sidebar maka prosesnya:</h5>
                        <h5>1A. Pada saat kita klik link di sidebar, link akan ditampilkan di URL -> http://komunitascoding/Codeigniter_MVC</h5>
                        <h5>1B. CI akan mencari apa yang kita cari dalam forder controllers, perhatikan hurufnya.</h5>
                        <h5>- Nama harus sama strukturnya, supaya bisa dicari<./h5> <h5>- Awalan huruf besar, untuk menandai bahwa file ini adalah controller.</h5>
                        <h5>- Huruf ke 2 dan seterusnya tidak pengaruh besar atau kecil, bisa menggunakan _ tapi - tidak bisa digunakan untuk nama controller.</h5>
                        <h5>- Disini kita mengunakan _ supaya URL dapat di search dengan baik.</h5>
                        <h5>- Diletakkan di dalam method dengan nama INDEX supaya dijalankan secara otomatis.</h5>
                        <h5>1C. Nama class harus sama dengan file nya.</h5>
                        <br>
                        <h5>2A. Mengarahkan halaman view mana yang akan dibuka.</h5>
                        <h5>2B. CI akan mencari nama itu didalam forder views</h5>
                        <h5>Dari 1 dan 2 nama bisa beda tapi disarankan menggunakan nama yang sama semua supaya kita tidak perlu mengingat view apa yang terhubung dengan controller apa.</h5>
                        <br>
                        <h5>Tidak disarankan menggunakan 1 controller untuk 2 view, hal ini akan berpangaruh terhadap link bootstrap dan java script yang ada di header dan footer.</h5>
                     </div>
                  </div>
                  <br><br>
               </div>
            </div>

            <!-- bagian taps  -->
            <div class="col-3 col-dm-3">
               <div class="nav flex-column nav-tabs nav-tabs-right h-100" id="vert-tabs-right-tab" role="tablist" aria-orientation="vertical">
                  <!-- intro -->
                  <a class="nav-link active" id="vert-tabs-right-1-tab" data-toggle="pill" href="#vert-tabs-right-1" role="tab" aria-controls="vert-tabs-right-1" aria-selected="false">Intro</a>
                  <!-- controller -->
                  <a class="nav-link" id="vert-tabs-right-2-tab" data-toggle="pill" href="#vert-tabs-right-2" role="tab" aria-controls="vert-tabs-right-2" aria-selected="false">Controller</a>
                  <!-- model -->
                  <a class="nav-link" id="vert-tabs-right-3-tab" data-toggle="pill" href="#vert-tabs-right-3" role="tab" aria-controls="vert-tabs-right-3" aria-selected="false">Model</a>
                  <!-- view -->
                  <a class="nav-link" id="vert-tabs-right-4-tab" data-toggle="pill" href="#vert-tabs-right-4" role="tab" aria-controls="vert-tabs-right-4" aria-selected="false">View</a>
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
<!-- akhir web mvc -->