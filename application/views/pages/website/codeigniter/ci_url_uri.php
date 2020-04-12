<!-- ci url uri -->
<div class="content-wrapper">
   <!-- Sidebar  -->
   <?php $this->load->view('layouts/_sidebar_website'); ?>
   <!-- akhir sidebar -->

   <!-- ########## judul ########## -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mx-1">
            <div class="col-sm-6">
               <h3 class="font-weight-bold text-gray"><i class="fab fa-free-code-camp"></i> Codeigniter Url & Uri</h3>
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
                  <!-- url friendly -->
                  <div class="tab-pane fade show active" id="vert-tabs-right-1" role="tabpanel" aria-labelledby="vert-tabs-right-1-tab">
                     <div class="h5">
                        Pada dasarnya Ci berorientasi terhadap url, dengan demikian kita dapat mengatur tampilan url sesuai kebutuhan kita.
                        <br><br>
                        Standart CI : http://url/uri/ <br>

                        -- Url = tempat nama domain : komunitascoding.com <br>
                        -- Uri = dibagi3 bagian : segment1/segment2/segment3/ <br>
                        -- Segment1 = tempat nama controller yang kita buat. <br>
                        -- Segment2 dan Segment3 = public function yang kita buat dalam file controller. <br>
                        OKI untuk memudahkan mencari viewnya, method dan halaman website, menggunakan nama yang sama atau mirip.
                        <br><br>
                        Dengan mengikuti aturan ini berarti kita sudah membuat url yang friendly terhadap search engiene. <br>
                        Dengan ini pula kita bisa meletakkan kata kunci untuk search engine sesuai kebutuhan kita, supaya bagian dari website kita dapat dengan mudah dikenali oleh search engine. <br>
                        <hr>
                        <a href="<?= base_url('codeigniter/mvc') ?>" target="_blank">Codeigniter - MVC/View</a> <br>
                     </div>
                  </div>
                  <!-- controller -->
                  <!-- <div class="tab-pane fade" id="vert-tabs-right-2" role="tabpanel" aria-labelledby="vert-tabs-right-2-tab">

                  </div> -->
                  <!-- model -->
                  <!-- <div class="tab-pane fade" id="vert-tabs-right-2" role="tabpanel" aria-labelledby="vert-tabs-right-2-tab">

                  </div> -->
                  <br><br>
               </div>
            </div>

            <!-- bagian taps  -->
            <div class="col-3 col-dm-3">
               <div class="nav flex-column nav-tabs nav-tabs-right h-100" id="vert-tabs-right-tab" role="tablist" aria-orientation="vertical">
                  <!-- url friendly -->
                  <a class="nav-link active" id="vert-tabs-right-1-tab" data-toggle="pill" href="#vert-tabs-right-1" role="tab" aria-controls="vert-tabs-right-1" aria-selected="false">Url friendly</a>
                  <!-- controller -->
                  <!-- <a class="nav-link" id="vert-tabs-right-2-tab" data-toggle="pill" href="#vert-tabs-right-2" role="tab" aria-controls="vert-tabs-right-2" aria-selected="false"></a> -->
                  <!-- model -->
                  <!-- <a class="nav-link" id="vert-tabs-right-3-tab" data-toggle="pill" href="#vert-tabs-right-3" role="tab" aria-controls="vert-tabs-right-3" aria-selected="false"></a> -->
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
<!-- akhir ci url uri -->