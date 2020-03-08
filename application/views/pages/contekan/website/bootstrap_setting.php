<!-- ########## container halaman ########## -->
<div class="content-wrapper">
    <div class="container mx-1">
        <!-- ########## judul ########## -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mx-1">
                    <div class="col-sm-6">
                        <h3 class="font-weight-bold text-gray"><i class="far fa-fw fa-window-maximize"></i> Bootstrap - Setting</h3>
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

        <!-- ########## container card ########## -->
        <div class="col-md-11">
            <h6>Di codeigniter, pembuatan halaman web di tempatkan dalam folder views karena di codeigniter sudah ada sistim <a href="http://localhost/komunitascoding/website/websistem_mvc" target="_blank">MVC</a> nya.</h6>
            <h6>1. Kita bisa memulai dari halaman beranda kita yang kita buat.</h6>
            <h6>2. Di bagian header dan footer ada 2 jenis link:</h6>
            <h6>- link ke folder lain dan</h6>
            <h6>- link ke website (yang pakai http://..)</h6>
            <div class="card p-1 shadow col-md-11">
                <img src="<?= base_url('assets/img/website/bootstrap-setting.jpg') ?>" class="img-fluid" alt="">
            </div>
            <h6>3. Yang diubah hanyalah yang link ke folder dengan menambahkan dibagian depannya
                ./assets atau assets saja.</h6>
            <h6> Ini tergantung posisi aslinya antar file sesuai templates yang kita gunakan.
                <h6>Contoh penambahan link nya:</h6>
                <h6>&ltlink rel="stylesheet" href="../../assets/dist/css/adminlte.min.css"&gt jadi</h6>
                <h6>&ltlink rel="stylesheet" href="./assets/dist/css/adminlte.min.css"&gt</h6>
                <h6>4. Harus ditambahkan semua ke semua link di bagian header dan footer nya.</h6>
                <h6>5. Intinya kita harus tetap mengembalikan koneksi antar file seperti pada templates aslinya.</h6>
                <h6>6. Sistem folder dalam website sama persis dengan sistem folder yang ada di FILE MANAGER.</h6>
                <h6>Bila tampilan website sudah rapi dan seperti aslinya berarti semua link sudah terhubung kembali.</h6>
                <br>
                <h6>Selamat berkarya sampai disini kita sudah mengintal dan setting bootstrap dengan lengkap.</h6>
                <br><br>

                <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
                    <i class="fas fa-chevron-up"></i>
                </a>
        </div>
        <!-- /.content-wrapper -->
        <!-- ### akhir container card ### -->
    </div>
</div>
<!-- ### akhir container halaman ### -->