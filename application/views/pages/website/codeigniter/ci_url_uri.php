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
               <h3 class="font-weight-bold text-gray"><i class="fab fa-free-code-camp"></i> Codeigniter URL & URI</h3>
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
                  <div class="tab-pane fade show active" id="vert-tabs-right-intro" role="tabpanel" aria-labelledby="vert-tabs-right-intro-tab">
                     <h5>Pada dasarnya Ci berorientasi terhadap url, dengan demikian kita dapat mengatur tampilan url sesuai kebutuhan kita.</h5>
                     <h5>Standart CI : http://url/uri/segment1/segment2/segment3/</h5>
                     <h5>- Url = tempat nama domain : http://komunitascoding.com/uri/segment1/segment2/segment3/</h5>
                     <h5>- uri = controller yang kita buat : http://komunitascoding.com/controller/segment1/segment2/segment3/</h5>
                     <h5>- segment = nama public function yang kita buat dalam file controller.</h5>
                     <br>
                     <h5>Dengan mengikuti aturan ini berarti kita sudah membuat url yang friendly terhadap search engiene.</h5>
                     <h5>Dengan ini pula kita bisa meletakkan kata kunci untuk search engine sesuai kebutuhan kita, supaya bagian dari website kita dapat dengan mudah di tampilkan di search.</h5>
                     <br>
                     <hr>
                     <h5><a href="<?= base_url('codeigniter/mvc') ?>" target="_blank">Codeigniter - MVC/View</a></h5>
                  </div>
                  <!-- controller -->
                  <!-- <div class="tab-pane fade" id="vert-tabs-right-controller" role="tabpanel" aria-labelledby="vert-tabs-right-controller-tab">
                     <section class="container col mt-n2">

                     </section>
                  </div> -->
                  <!-- model -->
                  <!-- <div class="tab-pane fade" id="vert-tabs-right-model" role="tabpanel" aria-labelledby="vert-tabs-right-model-tab">
                     <section class="container col mt-n2">

                     </section>
                  </div> -->
                  <br><br>
               </div>
            </div>

            <!-- bagian taps  -->
            <div class="col-3 col-dm-3">
               <div class="nav flex-column nav-tabs nav-tabs-right h-100" id="vert-tabs-right-tab" role="tablist" aria-orientation="vertical">
                  <!-- intro -->
                  <a class="nav-link active" id="vert-tabs-right-intro-tab" data-toggle="pill" href="#vert-tabs-right-intro" role="tab" aria-controls="vert-tabs-right-intro" aria-selected="false">Intro</a>
                  <!-- controller -->
                  <!-- <a class="nav-link" id="vert-tabs-right-controller-tab" data-toggle="pill" href="#vert-tabs-right-controller" role="tab" aria-controls="vert-tabs-right-controller" aria-selected="false"></a> -->
                  <!-- model -->
                  <!-- <a class="nav-link" id="vert-tabs-right-model-tab" data-toggle="pill" href="#vert-tabs-right-model" role="tab" aria-controls="vert-tabs-right-model" aria-selected="false"></a> -->
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