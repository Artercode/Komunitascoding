<!-- ws responsive -->
<div class="content-wrapper">
    <!-- Sidebar  -->
    <?php $this->load->view('layouts/_sidebar_website'); ?>
    <!-- akhir sidebar -->

    <!-- ########## judul ########## -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mx-1">
                <div class="col-sm-6">
                    <h3 class="font-weight-bold text-gray"><i class="fas fw fa-globe ml-1"></i></i> WEB Responsive</h3>
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

    <!-- ########## container card ########## -->
    <div class="col-lg-11 mt-n2 container-fluid">
        <h5>Website responsive adalah website yang tetap tersusun rapi bila dibuka mengunakan handphone.</h5>
        <h5>Hal ini bisa dilakuan karena adanya sistem GRID pada halaman website,</h5>
        <h5>pada umumnya semua framework untuk CSS sudah mengunakan sistem ini,</h5>
        <h5>Kita disini menggunakan bootstrap tentu saja sudah memiliki sistem GRID didalamnya.</h5>
        <br><br>
        <hr>
        <h5><a href="<?= base_url('bootstrap/grid_layout') ?>" target="_blank">Bootstrap - GRID - Layout</a></h5>
    </div>
    <!-- ### akhir halaman ### -->
    <br><br>
    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
        <i class="fas fa-chevron-up"></i>
    </a>
</div>
<!-- ### akhir container card ### -->
</div>
<!-- akhir ws responsive -->