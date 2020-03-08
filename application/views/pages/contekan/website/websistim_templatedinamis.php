<!-- ########## container halaman ########## -->
<div class="content-wrapper">
    <div class="container mx-1">
        <!-- ########## judul ########## -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mx-1">
                    <div class="col-sm-6">
                        <h3 class="font-weight-bold text-gray"><i class="far fa-fw fa-window-maximize"></i> Template Dinamis</h3>
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
            <h6>Tamplate dinamis merupakan pemisahan pada struktur dasar HTML nya.</h6>
            <h6>Pada umumnya sebuah halaman coding, dibagi menjadi 3 bagian header, main, dan footer nya.</h6>
            <h6>Bila menggunakan sidebar maka akan di sendirikan lagi jadi total 4 bagian.</h6>
            <h6>Pada Bagian header, footer dan sidebar bisanya tidak banyak mengalami perubahan.</h6>
            <h6>Tidak ada ketentuan pasti, sebaiknya tidak memotong pada tengah coding yang akan membuat repot kita sendiri <i class="far fa-grin-beam"></i> .</h6>
            <h6>Keuntungannya:</h6>
            <h6>- Memudahkan kita dalam coding karena focus pada halaman utama atau body html karena disinilah area untuk menulis coding.</h6>
            <h6>- Setidaknya halaman kerja akan lebih rapi sedikit.</h6>
            <br>
            <h6>Untuk merangkai kembali jika ditampilkan ke layar akan diatur di controller masing-masing halaman.</h6>
            <h6>dan kita dapat mengkombinasikan sesuai kebutuhan.</h6>
            <h6>Selain bagian body html nya semuanya disimpai di folder views/templates atau layouts, nama terserah aja,</h6>
            <h6>ya ya forder templates nya buat sendiri <i class="far fa-grin-beam"></i> .</h6>
            <h6>Untuk bagian body html juga ditempatkan didalam views/.. ,</h6>
            <h6>Jika dimasukan dalam folder baru sebaiknya diberi nama yang sama dengan nama controller nya , dengan menggunakan awalan huruf kecil sebagai tanda bahwa itu adalah file view.</h6>
            <div class="card p-1 shadow col-md-6">
                <img src="<?= base_url('assets/img/website/websistim_templatedinamis.jpg') ?>" class="img-fluid" alt="">
            </div>
        </div>
        <br><br>

        <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <!-- ### akhir container card ### -->
</div>
<!-- ### akhir container halaman ### -->