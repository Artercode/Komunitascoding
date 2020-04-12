<!-- ukm kasir -->
<div class="content-wrapper">
   <!-- Sidebar  -->
   <?php $this->load->view('layouts/_sidebar'); ?>
   <!-- akhir sidebar -->

   <!-- ########## judul ########## -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mx-1">
            <div class="col-sm-6">
               <h3 class="font-weight-bold text-gray"><i class="fas fa-fw fa-store"></i> UKM Kasir</h3>
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
                  <!-- intro -->
                  <div class="tab-pane fade show active" id="vert-tabs-right-1" role="tabpanel" aria-labelledby="vert-tabs-right-1-tab">
                     <div class="h5">
                        <h3 class="my-n1">Intro :</h3>
                        <hr>
                        Kami sepakat untuk mengangkan projek UKM kasir menjadi projek komunitas. <br>
                        Bertujuan untuk membantu UKM untuk mengelola usaha dengan UKM kasir. <br>
                        UKM kasir bisa digunakan secara gratis selamanya untuk UKM. <br>
                        Meskipun gratisan UKM kasir akan dibuat secanggih mungkin sesuai perkembangan coding. <br>
                        Kami berharap dapat memberikan dampak positif setidaknya untuk lingkungan kita.
                        <br><br>
                        Projek UKM kasir : masih dalam pengembangan.
                        <!-- projek ukm kasir -->
                        <div class="mt-2 card card-outline card-orange collapsed">
                           <!-- card head -->
                           <div class="card-header">
                              <table class="table m-n3">
                                 <tbody>
                                    <tr>
                                       <td>UKM Kasir</td>
                                       <td>POS</td>
                                       <td>CI-BS</td>
                                       <td>KomunitascodinG</td>
                                       <td>
                                          <div class="card-tools float-right">
                                             <a href="https://github.com/Artercode/UKM-Kasir" target="_blank" type="button" class="btn btn-sm btn-info">Github</a>
                                             <button type="button" class="mr-n4 btn btn-tool" data-card-widget="collapse"><i class="fas fa-fw fa-plus"></i>
                                             </button>
                                          </div>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <!-- card body -->
                           <div class="card-body" style="display: none;">
                              <div class="h6">
                                 <h5 class="my-n2">Diskripsi:</h5>
                                 <hr>
                                 Nama program : <i class="fas fa-fw fa-store"></i> UKM Kasir <br>
                                 Program : POS <br>
                                 Platform: Codeigniter - AdminLTE-3.0.2 <br>
                                 FITURE : <br>
                              </div>
                           </div>
                        </div>
                        <!-- akhir projek ukm kasir -->

                        Kami harus memulai langkah awal meskipun program belum jadi, jika tidak hal ini akan menjadi angan-angan saja <i class="far fa-grin-beam"></i>.
                        <br><br>
                        Dukungan sangat kami butuhkan untuk menjadikan UKM kasir berguna buat kita.

                     </div>
                  </div>
                  <!-- saran & ide -->
                  <div class="tab-pane fade" id="vert-tabs-right-2" role="tabpanel" aria-labelledby="vert-tabs-right-2-tab">
                     <div class="h5">
                        <h3 class="my-n1">Saran & Ide :</h3>
                        <hr>
                        -- Saran & Ide kalian sangat kami butuhkan baik dari para anggota komunitas atau dari siapa saja yang kebetulan lewat aja <i class="far fa-grin-beam"></i>. <br>
                        -- Dapat disampaikan secara langsung ke : <i class="fab fa-telegram"></i></i> +62 813 9504 5438 - Arter <br>
                        -- Jangan sungkan-sungkan jika punya saran & ide bagus.
                        <br><br>
                        Lowongan : <br>
                        Kami ingin memberikan yang terbaik dan karena keterbatasan kemampuan coding. <br>
                        -- Kami juga membuka lowongan untuk mengerjakan coding untuk mempercepat pembuatan UKM kasir. <br>
                        -- Silahkan hubungi Arter untuk kesepakatannya.

                     </div>
                  </div>
                  <!-- fiture -->
                  <div class="tab-pane fade" id="vert-tabs-right-3" role="tabpanel" aria-labelledby="vert-tabs-right-3-tab">
                     <div class="h5">
                        <h3 class="my-n1">Fiture yang akan dibuat :</h3>
                        <hr>
                        <b>Kasir :</b> <br>
                        -- Sistim kasir yang dapat digunakan di computer dan tablet, harus mendukung sistem touchscreen monitor. <br>
                        -- Cepat dalam pelayanan sampai pembuatan nota penjualan. <br>
                        -- Barcode untuk input data dan membuat barcode untuk barang belum ada barcode. <br>
                        -- 3 tingkatan satuan = grosir, eceran dan satuan (kilogram, liter dll). <br>
                        -- Harga jual masing-masing satuan.
                        <br><br>
                        <b>Stok :</b> <br>
                        -- Jumlah stok yang ada. <br>
                        -- Kategori stok. <br>
                        -- Batas minimum stok. <br>
                        -- Notivikasi untuk batas minimum stok. <br>
                        -- Barang Rusak. <br>
                        -- Barang Reture hanya untuk yang berubah bentuk misalnya pengembalian uang.
                        <br><br>
                        <b>Kulakan :</b> <br>
                        -- Batas maksimum kulakan. <br>
                        -- Note untuk kulakan jika ada stok yang sudah mencapai batas minimum stok. <br>
                        -- Membandingkan harga beli dari para supplier.
                        <br><br>
                        <b>Pemasok :</b> <br>
                        -- Data pemasok. <br>
                        -- Jadwal pemasok datang dan notifikasi 1 hari sebelumnya.
                        <br><br>
                        <b>Level :</b> <br>
                        -- Ada 4 bagian : pegawai, kasir , kabag dan CEO. <br>
                        -- Menu sidebar dinamis. <br>
                        -- Semua menu disesuaikan level.
                        <br><br>
                        <b>Catatan :</b> <br>
                        -- Fiture akan dikembangkan berdasarkan saran dan ide. <br>


                     </div>
                  </div>
                  <!-- catatan -->
                  <div class="tab-pane fade" id="vert-tabs-right-4" role="tabpanel" aria-labelledby="vert-tabs-right-4-tab">
                     <div class="h5">
                        <h3 class="my-n1">Catatan :</h3>
                        <hr>
                        1. Printer dicarikan harga yang terjangkau untuk UKM. <br>
                        2. Database jika memungkinkan menggunkan google drive yang gratisan mungkin bisa untuk menghindari kehilangan data dan mengurangi beban pengeluaran.

                     </div>
                  </div>
                  <!-- terima kasih -->
                  <div class="tab-pane fade" id="vert-tabs-right-5" role="tabpanel" aria-labelledby="vert-tabs-right-5-tab">
                     <div class="h5">
                        <h3 class="my-n1">Kami ucapkan terima kasih atas kontribusinya :</h3>
                        <hr>
                        1.

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
                  <!-- saran & ide -->
                  <a class="nav-link" id="vert-tabs-right-2-tab" data-toggle="pill" href="#vert-tabs-right-2" role="tab" aria-controls="vert-tabs-right-2" aria-selected="false">Saran & Ide</a>
                  <!-- fiture -->
                  <a class="nav-link" id="vert-tabs-right-3-tab" data-toggle="pill" href="#vert-tabs-right-3" role="tab" aria-controls="vert-tabs-right-3" aria-selected="false">Fiture</a>
                  <!-- catatan -->
                  <a class="nav-link" id="vert-tabs-right-4-tab" data-toggle="pill" href="#vert-tabs-right-4" role="tab" aria-controls="vert-tabs-right-4" aria-selected="false">Catatan</a>
                  <!-- Terima kasih -->
                  <a class="nav-link" id="vert-tabs-right-5-tab" data-toggle="pill" href="#vert-tabs-right-5" role="tab" aria-controls="vert-tabs-right-5" aria-selected="false">Terima kasih</a>
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
<!-- akhir ukm kasir -->