<!-- aula projek -->
<div class="content-wrapper">
   <!-- Sidebar  -->
   <?php $this->load->view('layouts/_sidebar'); ?>
   <!-- akhir sidebar -->

   <!-- ########## judul ########## -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-6">
               <h3 class="font-weight-bold text-gray"><i class="fas fa-fw fa-project-diagram"></i> Aula Projek</h3>
            </div>
            <!-- info -->
            <div class="h2 col-sm-6">
               <a class="float-sm-right" href="" id="dropdown" data-toggle="dropdown">
                  <i class="mx-1 fas fa-fw fa-exclamation-circle"></i>
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
                  <h6>
                     <h6>Rencana update:</h6>
                     <h6>-bagian tanya jawab/diskusi.</h6>
                     <h6>-notifikasi bila ada balasan diskusi</h6>
               </div>
            </div>
            <!-- akhir info -->
         </div>
      </div>
   </section>
   <!-- ### akhir judul ### -->

   <!-- ########## halaman ########## -->
   <div class="col-lg-11 mt-n2 container-fluid">
      <!-- projek login -->
      <div class="mb-3 card card-outline card-indigo collapsed">
         <!-- card head -->
         <div class="card-header">
            <table class="table m-n3">
               <tbody>
                  <tr>
                     <td>29h 12:05</td>
                     <td>Login</td>
                     <td>Sistim Login</td>
                     <td>CI-BS</td>
                     <td>Arter Code</td>
                     <td>
                        <div class="card-tools float-right">
                           <a href="https://github.com/Artercode/login" target="_blank" type="button" class="btn btn-sm btn-info">Github</a>
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
            <h5>Diskripsi:</h5>
            <h6>Nama program : Login</h6>
            <h6>Program : Sistim Login</h6>
            <h6>Platform: Codeigniter - AdminLTE-3.0.2</h6>
            <h6>Fasilitas:</h6>
            <h6>- 3 Level.</h6>
            <h6>- 3 Menu dinamis & tampil sesuai Level.</h6>
            <h6>- Konfirmasi email untuk register.</h6>
         </div>
         <!-- card footer -->
         <!-- tempat diskusi -->
      </div>
      <!-- akhir projek login -->



   </div>
   <!-- ### akhir halaman ### -->
   <br><br>
   <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
   </a>
</div>
<!-- akhir aula projek-->