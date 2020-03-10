<!-- ci instalasi -->
<div class="content-wrapper">
    <!-- Sidebar  -->
    <?php $this->load->view('layouts/_sidebar_website'); ?>
    <!-- akhir sidebar -->

    <!-- ########## judul ########## -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mx-1">
                <div class="col-sm-6">
                    <h3 class="font-weight-bold text-gray"><i class="fab fa-free-code-camp"></i> Codeigniter - Instalasi</h3>
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
        <h5>1. Download Codeigniter: <a href="https://codeigniter.com/download" target="_blank">https://codeigniter.com/download</a></h5>
        <h5>2. Extrak zip filenya dan ganti nama forder seperti nama projek kita.</h5>
        <h5>3. Pindahkan folder projek anda ke dalam folder htdocs yang ada di Xampp (../xampp/htdocs/projek_kita). </h5>
        <h5>4. Jalankan Xampp, jalankan Apache dan MySql untuk databasenya.</h5>
        <h5>5. Jalankan Codeigniter nya di browser dengan menetikkan <a href="" target="_blank">localhost/nama-projek/</a> yang telah dibuat</h5>
        <h5>6. Kita sudah berhasil menginstal Codeigniter.</h5>
    </div>
    <!-- ### akhir halaman ### -->
    <br><br>
    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
        <i class="fas fa-chevron-up"></i>
    </a>
</div>
<!-- akhir ci instalasi -->