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
               <h3 class="font-weight-bold text-gray"><i class="nav-icon far fa-circle"></i> IF</h3>
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
      <h5>IF adalah syntak php yang paling sering digunakan, tentang pengkondisian.</h5>
      <h5>Dan paling sering membingungkan bagi pemula,</h5>
      <br>
      <h5>Cara penulisan IF hanya ada 2 macam, dan artinya sama saja:</h5>
      <h5>&lt?php IF(argument) ? (1.benar) : (2.salah) ?&gt</h5>
      <br>
      <h5>&lt?php IF(argument) {</h5>
      <h5>(1.benar)</h5>
      <h5>} else {</h5>
      <h5>(2.salah)</h5>
      <h5>}</h5>
      <br>
      <h5>Apapun argumentnya, yang 1 mau ngapain kita jika benar, yang 2 jika salah kita harus begini..., dan terpenting tidak bisa ditukar posisinya. Computer akan membaca 1 itu benar meskipun kita tukar( 2 lalu 1). Jadi jangan dibalik-balik bisa pusing sendiri <i class="far fa-grin-beam"></i> soalnya computer bacanya gak bisa dibalik 1ya1 , 2ya2.</h5>

   </div>
   <!-- ### akhir halaman ### -->
   <br><br>
   <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
   </a>
</div>
<!-- akhir xampp -->