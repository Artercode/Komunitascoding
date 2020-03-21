<!-- ci crud -->
<div class="content-wrapper">
   <!-- Sidebar  -->
   <?php $this->load->view('layouts/_sidebar_website'); ?>
   <!-- akhir sidebar -->

   <!-- ########## judul ########## -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mx-1">
            <div class="col-sm-6">
               <h3 class="font-weight-bold text-gray"><i class="fab fa-free-code-camp"></i> Codeigniter - CRUD</h3>
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
                  <!-- intro -->
                  <div class="tab-pane fade show active" id="vert-tabs-right-intro" role="tabpanel" aria-labelledby="vert-tabs-right-intro-tab">
                     <section>
                        <h5>Untuk membuka website kita memasukkan alamat web di search browse.</h5>
                        <h5>Jadi apapun yang ada di halaman website yang membuat tampilan berubah adalah instruksi yang kita masukan, baik melalui keyboard atau mouse dan hasilnya ditampilkan ke layar monitor melalui brower (dibutuhkan brower untuk menampilkan di layar monitor).</h5>
                        <h5>Instruksi yang kita masukan biasa disebut dengan DATA INPUT, hanya ada 2 jenis:</h5>
                        <h5>1. INPUT berupa link yang mengarahkan menuju halaman web lain.</h5>
                        <h5>2. INPUT + DATA berupa tombol untuk melakuan sebuah prosess yang menggunakan rumus-rumus atau biasa disebut method, umumnya submit pada bagian akhir akan ada INPUT link yang mengarahkan ke sebuah halaman untuk menampilkan hasilnya.</h5>
                        <h5>Gampangnya apapun dilayar monitor yang dapat kita klik, semuanya pasti ada salah satu dari DATA INPUT, <i class="far fa-grin-beam"></i> dan link yang menghubungkan ke controller mana.</h5>
                        <h5>Semua data input akan masuk ke bagian controller untuk diproses, jadi apapun yang kita klik itu adalah nama dari sebuah controller, atau controller mana yang kita gunakan untuk mengeksekusi. dan name controller inilah yang ditampilkan sebagai URI setelah URL website kita.</h5>
                        <h5>Setelah DATA INPUT sampai di controller, maka fungsi MVC dan fungsi CRUD digunakan. selengkapnya baca <a href="<?= base_url('codeigniter_mvc') ?>" target="_blank">MVC</a></h5>
                        <h5>Semua fungsi CRUD = Create, Read, Update dan Delete, semua fungsi ini adalah process yang berhubungan dengan database, dan sesuai dengan cara MVC, berarti semua CRUD tempatnya berada di bagian folder MODELS. Didalam application.</h5>
                     </section>
                  </div>
                  <!-- create -->
                  <div class="tab-pane fade" id="vert-tabs-right-create" role="tabpanel" aria-labelledby="vert-tabs-right-create-tab">
                     <section class="container col mt-n2">
                        <h5>Penerapan create yang sering kita temui adalah registrasi.</h5>
                        <h5>Menambahkan data dalam database yang ada dalam phpMyAdmin.</h5>
                        <h5>Prosess dilakukan di controller dan view saja tanpa model, supaya jelas dulu kemana alur prosessnya.</h5>
                        <h5>1. Membutuhkan link dihalaman website yang menginstruksikan controller register untuk dijalankan.</h5>
                        <h5>2. Controller akan menampilkan form register, guna memasukkan DATA yang dibutuhkan.</h5>
                        <h5>3. Data diisikan di form register setelah di submit/klik tombol register, data akan di bawa ke controller.</h5>
                        <h5>4. Data akan di validasi sesuai ketentuan kita.</h5>
                        <h5>- jika validasi lolos, data akan disimpan di database, diarahkan ke halaman yang kita tentukan dan buat pesan berhasil disimpan.</h5>
                        <h5>- jika validasi tidak lolos akan dikembalikan ke register dan buat pesan kesalahannya apa.</h5>
                        <h5>Setelah paham prosessnya, bagian create bisa dipindahkan ke model, dan jangan lupa membuat link penghubung di controller untuk menjalankan model tadi.</h5>

                     </section>
                  </div>
                  <!-- read -->
                  <div class="tab-pane fade" id="vert-tabs-right-read" role="tabpanel" aria-labelledby="vert-tabs-right-read-tab">
                     <section class="container col mt-n2">
                        <h5>Penerapan read yang sering kita temui adalah adanya tabel yang tampilan dalam website.</h5>
                        <h5>Untuk menampilkan data tabel kita membutuhkan prosses read yang gunanya untuk membaca atau mengambil data dari database.</h5>
                        <h5>1. Controller akan mengambil data dari database.</h5>
                        <h5>2. Controller akan menampilkan view beserta data ke monitor.</h5>
                     </section>
                  </div>
                  <!-- update -->
                  <div class="tab-pane fade" id="vert-tabs-right-update" role="tabpanel" aria-labelledby="vert-tabs-right-update-tab">
                     <section class="container col mt-n2">
                        <h5>Penerapan update yang sering kita temui adalah edit tabel atau mengubah data dalam database.</h5>
                        <h5>Prosess dilakukan di controller dan view saja tanpa model, supaya jelas dulu kemana alur prosessnya.</h5>
                        <h5>1. Dibutuhkan angker atau tombol untuk trigernya, di sertai dengan pengiriman id nya yang mana yang akan diupdate.</h5>
                        <h5>2. Data baru akan dikirim ke controller untuk diprosess.</h5>
                        <h5>3. Controller akan mencari tabel apa yang akan edit dan melakukan prosess update data.</h5>
                        <h5>4. Controller akan mengarahkan ke halaman yang kita tentukan beserta perubahan dan pesan bahwa data berhasil diubah.</h5>
                        <h5>Apabila update membutuhkan prosess panjang, baru dipindahkan dibagian model.</h5>
                     </section>
                  </div>
                  <!-- delete -->
                  <div class="tab-pane fade" id="vert-tabs-right-delete" role="tabpanel" aria-labelledby="vert-tabs-right-delete-tab">
                     <section class="container col mt-n2">
                        <h5>Delete adalah prosess menghapus data dalam database.</h5>
                        <h5>1. Dibutuhkan angker atau tombol untuk trigernya, di sertai dengan pengiriman id nya yang mana yang akan dihapus.</h5>
                        <h5>2. Data akan dikirim ke controller untuk diprosess.</h5>
                        <h5>3. Controller akan mencari tabel dan berdasarkan id akan mecari baris mana dalam tabel yang akan dihapus.</h5>
                        <h5>4. Controller akan mengarahkan ke halaman yang kita tentukan, beserta hasil delete dan pesan bahwa data berhasil dihapus.</h5>
                        <h5>Prosess delete hanya 1 baris coding saja, kami rasa sebaiknya dilakukan dicontroller saja, tanpa model.</h5>
                     </section>
                  </div>
                  <br><br>
               </div>
            </div>

            <!-- bagian taps  -->
            <div class="col-3 col-dm-3">
               <div class="nav flex-column nav-tabs nav-tabs-right h-100" id="vert-tabs-right-tab" role="tablist" aria-orientation="vertical">
                  <!-- intro -->
                  <a class="nav-link active" id="vert-tabs-right-intro-tab" data-toggle="pill" href="#vert-tabs-right-intro" role="tab" aria-controls="vert-tabs-right-intro" aria-selected="false">Intro</a>
                  <!-- create -->
                  <a class="nav-link" id="vert-tabs-right-create-tab" data-toggle="pill" href="#vert-tabs-right-create" role="tab" aria-controls="vert-tabs-right-create" aria-selected="false">Create</a>
                  <!-- Read -->
                  <a class="nav-link" id="vert-tabs-right-read-tab" data-toggle="pill" href="#vert-tabs-right-read" role="tab" aria-controls="vert-tabs-right-read" aria-selected="false">Read</a>
                  <!-- update -->
                  <a class="nav-link" id="vert-tabs-right-update-tab" data-toggle="pill" href="#vert-tabs-right-update" role="tab" aria-controls="vert-tabs-right-update" aria-selected="false">Update</a>
                  <!-- delete -->
                  <a class="nav-link" id="vert-tabs-right-delete-tab" data-toggle="pill" href="#vert-tabs-right-delete" role="tab" aria-controls="vert-tabs-right-delete" aria-selected="false">Delete</a>
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
<!-- akhir ci crud -->