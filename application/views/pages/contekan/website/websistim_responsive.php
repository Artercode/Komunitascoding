<!-- ########## container halaman ########## -->
<div class="content-wrapper">
    <div class="container mx-1">
        <!-- ########## judul ########## -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mx-1">
                    <div class="col-sm-6">
                        <h3 class="font-weight-bold text-gray"><i class="fas fw fa-globe ml-1"></i></i> Web Responsive</h3>
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
            <h6>Web responsive adalah website bila dibuka dengan handphone akan tetap tersusun dengan rapi.</h6>
            <h6>Hal ini bisa dilakuan sengan adanya sistem GRID pada halaman web,</h6>
            <h6>pada umumnya semua framework untuk CSS sudah mengunakan sistem ini,</h6>
            <h6>Kita disini menggunakan bootstrap tentu saja sudah memiliki sistem GRID didalamnya.</h6>
            <div class="card p-1 shadow col-md-6">
                <img src="<?= base_url('assets/img/website/websistim_responsive.jpg') ?>" class="img-fluid" alt="">
            </div>
            <h6>kalian bisa mempelajari di website Bootstrap: <a href="https://getbootstrap.com/docs/4.3/layout/grid/" target="_blank">https://getbootstrap.com/docs/4.3/layout/grid/</a></h6>
            <br>
            <h6>Pada intinya kolom pada website dibagi-bagi menjadi 12 kolom, dan untuk layar tampilan dibagi menjadi 4 layar monitor:</h6>
            <h6> layar computer ada 2 layar, tablet dan handphone (xl, lg, md, dan sm),</h6>
            <h6>atau kita dapat melihatnya dengan jelas jika kita mengecilkan kolom browser.</h6>
            <h6>akan terjadi perubahan struktur website bila ukurannya sesuai dengan ketentuan 4 layar monitor tersebut.</h6>
            <h6>Yang perlu diingat berapapun kolom yang kita gunakan selalu dibagi menjadi 12 grid.</h6>
            <h6>meskipun lebar kolom hasil pembagian juga dihitung 12 grid.</h6>
            <h6>Contoh:</h6>
            <h6>1. Kita sudah membagi kolom dengan 6 grid dan 6 grid, menjadi kolom A dan kolom B</h6>
            <h6>2. Bila kita mau membagi lagi kolom A menjadi kolom C dan kolom D, maka grid dari kolom A akan tetap dihitung 12 grid.</h6>
            <h6>Begitu cara pembagiannya, berapapun lebar kolomnya kalau mau dibagi grid tetap 12.</h6>
        </div>
        <br><br>

        <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <!-- ### akhir container card ### -->
</div>
<!-- ### akhir container halaman ### -->