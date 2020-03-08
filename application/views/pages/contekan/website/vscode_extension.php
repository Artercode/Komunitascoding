<!-- vscode extension -->
<div class="content-wrapper">
    <!-- Sidebar  -->
    <?php $this->load->view('layouts/_sidebar_website'); ?>
    <!-- akhir sidebar -->

    <!-- ########## judul ########## -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mx-1">
                <div class="col-sm-6">
                    <h3 class="font-weight-bold text-gray"><i class="far fa-fw fa-circle"></i> VScode - Extensions</h3>
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
        <div class="row">
            <div class="col-lg-4">
                <h6>Daftar Extensions yang sangat berguna:</h6>
                <h6>1. Auto Rename Tag </h6>
                <h6>2. Beautify</h6>
                <h6>3. Bootstrap 4 </h6>
                <h6>4. Braket Pair Colorizer </h6>
                <h6>5. ci_snippets2 </h6>
                <h6>6. GitExtensions </h6>
                <h6>7. indent-rainbow </h6>
                <h6>8. IntelliSense for CSS class names in HTML </h6>
                <h6>9. Live Server </h6>
                <h6>10. Material Theme </h6>
                <h6>11. open in browser </h6>
                <h6>12. PHP Extension Pack </h6>
                <h6>12. PHP Intelephense </h6>
                <h6>14. Snippet </h6>
                <h6>15. vscode-icon</h6>
            </div>
            <div class="card p-1 shadow col-md-7">
                <img src="<?= base_url('images/website/vscode-extensions.jpg') ?>" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    <!-- ### akhir halaman ### -->
    <br><br>
    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
        <i class="fas fa-chevron-up"></i>
    </a>
</div>
<!-- ### akhir container card ### -->
</div>
<!-- akhir vscode extension -->