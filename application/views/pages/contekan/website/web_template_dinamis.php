<!-- web template dinamis -->
<div class="content-wrapper">
    <!-- Sidebar  -->
    <?php $this->load->view('layouts/_sidebar_website'); ?>
    <!-- akhir sidebar -->

    <!-- ########## judul ########## -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mx-1">
                <div class="col-sm-6">
                    <h3 class="font-weight-bold text-gray"><i class="far fa-fw fa-circle"></i> Template Dinamis</h3>
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
        <h5>Pada umumnya sebuah halaman website, terdapat kerangka dasar <a href="<?= base_url('html_kerangka_dasar') ?>" target="_blank">HTML</a>, head dan body</h5>
        <h5>Dalam body merupakan tempat coding untuk membuat sebuah halaman website</h5>
        <h5>dalam body biasa terdapat navbar sidebar main dan footer, tergantung desain kita.</h5>
        <h5>Tamplate dinamis merupakan pemisahan struktur <a href="<?= base_url('html_kerangka_dasar') ?>" target="_blank">HTML</a> yang terdapat pada suatu halaman website.</h5>
        <h5>Tidak ada ketentuan pasti, berapa banyak halaman itu akan dipotong, yang terpenting tidak ada bagian yang hilang dan pada saat memangil halaman itu harus berurutan sesuai potongannya.</h5>
        <br>
        <h5>Tujuan dari pemipisahan menjadi beberapa bagian untuk memudahkan kita dalam mengerjakan coding . maka jangan memotong ditengah codingan, wah ini tambah ribet nanti <i class="far fa-grin-beam"></i> .</h5>
        <h5>Biasanya dipisahkan berdasarkan kelompok codingannya seperti, navbar, sidebar dan footer tergantung dari bentuk website itu sendiri.</h5>
        <h5>Dengan pemisahan bagian ini maka kita cuman berurusan dengan MAIN yang merupakan halaman utama dari suatu halaman website, hal ini akan sangat memudahkan kita dalam melakukan coding, setidaknya halaman coding jadi lebih pendek dan simpel.</h5>
        <br>
        <h5>Hasil dari pemotongan semuanya akan ditempatkan dalam folder views,</h5>
        <h5>Buat forder baru dalam forlder views dengan nama templates atau layouts sama aja, kedua nama ini yang biasa digunakan, untuk menempatkan header,navbar, sidebar dan footer</h5>
        <h5>Dan untuk main karena jumlahnya banyak, tiap halaman web selalu berbeda maka ditempatkan terpisah dan dikelompokan sesuai kebutuhan.</h5>
        <div class="card p-1 shadow col-md-6">
            <img src="<?= base_url('./images/website/web_template_dinamis.jpg') ?>" class="img-fluid" alt="">
        </div>
        <br>
        <h5>Untuk merangkai kembali saat menampilkan halaman website akan dilakukan di bagian controllers, inilah salah satu fungsi dari controller.</h5>
        <h5>Dan yang terpenting harus berurutan sesuai urutan pemotongan yang dilakukan.</h5>
        <h5>Sampai disini pengertian soal template dinamis, untuk melengkapi sebaiknya baca bagian <a href="#">MVC</a>, hal ini perlu dibahas di bagian terpisah.</h5>
    </div>
    <!-- ### akhir halaman ### -->
    <br><br>
    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
        <i class="fas fa-chevron-up"></i>
    </a>
</div>
<!-- akhir web template dinamis -->