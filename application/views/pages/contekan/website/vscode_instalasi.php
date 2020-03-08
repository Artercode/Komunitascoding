<!-- vscode_instalasi -->
<div class="content-wrapper">
    <!-- Sidebar  -->
    <?php $this->load->view('layouts/_sidebar_website'); ?>
    <!-- akhir sidebar -->

    <!-- ########## judul ########## -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mx-1">
                <div class="col-sm-6">
                    <h3 class="font-weight-bold text-gray"><i class="far fa-fw fa-circle"></i></i> VScode - Instalasi</h3>
                </div>
                <!-- info -->
                <div class="h2 col-sm-6">
                    <a class="float-sm-right" href="#" id="dropdown" data-toggle="dropdown">
                        <i class="fas fa-fw fa-exclamation-circle"></i>
                    </a>
                    <!-- Dropdown info -->
                    <div class="p-4 dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="dropdown">
                        <h6>1. Bila ada yang salah ketik atau kurang lengkap </h6>
                        <h6> sampaikan ke admin untuk diperbaiki.</h6>
                        <h6>2. Apabila ada cara yang lebih mudah dan cepat, </h6>
                        <h6> tolong informasikan ke admin. <a href="<?= base_url('selamat_datang') ?>"><kbd>Kontak</kbd></a></h6>
                        <h6>3. Bantuan koreksi kalian sangat kami harapkan.</h6>
                        <h6>4. Semoga bermanfaat buat kita semua.</h6>
                        <h6>5. Terima kasih atas suportnya untuk Komunitas Coding.</h6>
                    </div>
                </div>
                <!-- akhir info -->
            </div>
        </div>
    </section>
    <!-- ### akhir judul ### -->

    <!-- ########## halaman ########## -->
    <div class="col-lg-11 mt-n2 container-fluid">
        <h5>1. Download VScode: <a href="https://code.visualstudio.com/" target="_blank">https://code.visualstudio.com/</a></h5>
        <h5>2. VScode adalah tempat untuk menulis coding.</h5>
        <h5>3. Buka folder website yang kalian kerjakan di VScode.</h5>
        <div class="card p-1 shadow col-md-11">
            <img src="<?= base_url('images/website/vscode-instalasi.jpg') ?>" class="img-fluid" alt="">
        </div>
        <h5>-atau dapat kita drag folder website ke dalam Vscode</h5>
    </div>
    <!-- ### akhir halaman -->
    <br><br>
    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
        <i class="fas fa-chevron-up"></i>
    </a>
</div>
<!-- akhir vscode instalasi ### -->