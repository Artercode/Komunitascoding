<!-- bootstrap instalasi -->
<div class="content-wrapper">
    <!-- Sidebar  -->
    <?php $this->load->view('layouts/_sidebar_website'); ?>
    <!-- akhir sidebar -->

    <!-- ########## judul ########## -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mx-1">
                <div class="col-sm-6">
                    <h3 class="font-weight-bold text-gray"><i class="fab fa-fw fa-bootstrap"></i> Bootstrap - Instalasi</h3>
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
        <h5>Download template Bootstrap yang akan kita gunakan:</h5>
        <h5>- <a href="https://startbootstrap.com/templates/sb-admin-angular/" target="_black">https://startbootstrap.com/templates/sb-admin-angular/</a> atau</h5>
        <h5>- <a href="https://adminlte.io/" target="_black">https://adminlte.io/</a></h5>
        <h5>Untuk yang AdminLTE karena berupa github, dibagian paling bawah assets,</h5>
        <h5>File template AdminLTE sangat besar karena fiture nya yang lengkap.</h5>
        <h5>Untuk bootstrap isi file akan berbeda sesuai sesuai template yang kita gunakan</h5>
        <br>
        <h5>Bootstrap merupakan framework CSS jadi hanya dengan bootstrap</h5>
        <h5>kita sudah dapat membuat website tanpa ada pengolahan database.</h5>
        <h5>1. Extrak bootstrap ganti nama folder dengan nama projek kita</h5>
        <h5>2. Simpan di xampp/htdocs.</h5>
        <h5>3. Bootstrap sudah siap digunakan untuk membuat website.</h5>
        <br>
        <h5>Bila kita mengunakan Codeigniter, kita bisa menggabungkannya, Codeigniter merupakan framework untuk php.</h5>
        <h5>1. Download template bootstrap yang akan kita gunakan.</h5>
        <h5>2. Extrak zip filenya dan ganti nama folder dengan assets</h5>
        <h5>3. Simpan dalam xampp/projek_kita</h5>
        <div class="card p-1 shadow col-md-6">
            <img src="<?= base_url('images/website/bootstrap-instalasi.jpg') ?>" class="img-fluid" alt="">
        </div>
        <h5>4. Yang terakir kita masih membutuhkan setting untuk link yang ada di bagian header dan footernya.</h5>
        <h5>- bisa dilihat di bagian <a href="<?= base_url('bootstrap_setting') ?>">Bootstrap - Setting</a></h5>
        <h5>5. CI-BS siap digunakan.
    </div>
    <!-- ### akhir halaman ### -->
    <br><br>
    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
        <i class="fas fa-chevron-up"></i>
    </a>
</div>
<!-- akhir bootstrap instalasi-->