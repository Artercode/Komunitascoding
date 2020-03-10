<!-- html kerangka dasar -->
<div class="content-wrapper">
    <!-- Sidebar  -->
    <?php $this->load->view('layouts/_sidebar_website'); ?>
    <!-- akhir sidebar -->

    <!-- ########## judul ########## -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mx-1">
                <div class="col-sm-6">
                    <h3 class="font-weight-bold text-gray"><i class="fas fa-fw fa-code"></i> HTML - Kerangka Dasar</h3>
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
        <h5>HTML adalah kerangka dasar dari sebuah website, untuk program lainnya: php, java, dan CSS dibuat diatas HTML.</h5>
        <h5>php untuk mengerjakan web itu sendiri, Java untuk pengolahan data, CSS untuk memperindah tampilan.</h5>
        <h5>Akan ada sebagian coding yang bersinggungan(sama gunanya), semuanya bisa dipakai.</h5>
        <h5>Penggunaan HTML jauh lebih ringan untuk kerja computer kita. HTML lah cikal bakal adanya website.</h5>
        <h5>Kerangka Dasar HTML:</h5>
        <div class="card p-1 shadow">
            <img src="<?= base_url('images/website/html-kerangka-dasar.jpg') ?>" class="img-fluid" alt="">
        </div>
        <h5><b><code>VScode key: </code></b><kbd>! + tab</kbd> atau <kbd>doc + tab</kbd></h5>
    </div>
    <!-- ### akhir halaman ### -->
    <br><br>
    <a id=" back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
        <i class="fas fa-chevron-up"></i>
    </a>
</div>
<!-- akhir html kerangka dasar -->