<!-- codeigniter setting -->
<div class="content-wrapper">
    <!-- Sidebar  -->
    <?php $this->load->view('layouts/_sidebar_website'); ?>
    <!-- akhir sidebar -->

    <!-- ########## judul ########## -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mx-1">
                <div class="col-sm-6">
                    <h3 class="font-weight-bold text-gray"><i class="far fa-fw fa-window-maximize"></i> Codeigniter - Setting</h3>
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
        <h5>1. Menghilangkan penulisan index.php di url:</h5>
        <h5>dengan membuat file .htaccess (Tanpa extension) di folder projek, sejajar dengan folder application dll</h5>
        <div class="card p-1 shadow col-md-6">
            <img src="<?= base_url('images/website/codeigniter-setting2.jpg') ?>" class="img-fluid" alt="">
        </div>
        <h5><a href="https://codeigniter.com/user_guide/general/urls.html?highlight=htaccess" target="_blank">https://codeigniter.com/user_guide/general/urls.html?highlight=htaccess</a></h5>
        atau:
        <pre>
        RewriteEngine on

        Options All -Indexes
        IndexIgnore *
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteCond %{REQUEST_FILENAME} !-d
        RewriteRule ^(.*)$ index.php/$1 [L]

        &ltifmodule mod_headers.c=""&gt
        SetEnvIf Origin "^(.*\.<kbd>nama-domain</kbd>\.com)$" ORIGIN_SUB_DOMAIN=$1
        Header set Access-Control-Allow-Origin "%{ORIGIN_SUB_DOMAIN}e" env=ORIGIN_SUB_DOMAIN
        Header set Access-Control-Allow-Methods: "*"
        Header set Access-Control-Allow-Headers: "Origin, X-Requested-With, Content-Type, Accept, Authorization"
        &lt/ifmodule&gt
        </pre>
        <h5>2. Mengubah CI welcome menjadi home kita</h5>
        <h5>- [26] $config['base_url'] = 'http://localhost/folder-projek/';</h5>
        <h5>- [38] $config['index_page'] = '';</h5>
        <div class="card p-1 shadow col-md-6">
            <img src="<?= base_url('images/website/codeigniter-setting.jpg') ?>" class="img-fluid" alt="">
        </div>
        <br>
        <h5>3. Mengarahkan ke halaman home</h5>
        <h5>- [52] $route['default_controller'] = 'home';</h5>
        <h5>- Di dalam views dan controllers ada file Welcome.php dan welcome.php perhatikan huruf depannya, itu syarat dari CI yang membedakan file control atau file view</h5>
        <h5>- Di controllers ubah Welcome.php menjadi Home.php dan isinya <code>class Home extends MY_Controller</code></h5>
        <h5>- Di views ubah welcome.php menjadi home.php (pakai huruf depan kecil)</h5>
        <h5>Lihat di browser <code>localhost/home</code> bila tampil welcome CI berarti kita sudah menampilkan halaman home.</h5>
        <br>
        <h5>4. Buka application/config/autoload.php (setting libraries dan helper yang biasa kita gunakan)</h5>
        <h5>- [61] $autoload['libraries'] = array('database', 'email', 'session', 'form_validation');</h5>
        <h5>- [92] $autoload['helper'] = array('url', 'form', 'file', 'security');</h5>
        <h5>Untuk data lengkapnya: <a href="https://codeigniter.com/user_guide/index.html" target="_blank">https://codeigniter.com/user_guide/index.html</a></h5>
        <br>
        <h5>5. Buka application/config/database.php</h5>
        <h5>- [79] 'username' => 'root',</h5>
        <h5>- [80] 'password' => '',</h5>
        <h5>- [81] 'database' => 'nama-folder-database', (harus sama dengan yang di phpMyAdmin)</h5>
        <h5>Database dalam phpMyAdmin, harus dibuat terlebih dahulu, jika tidak akan terjadi error,</h5>
        <h5> jika belum ada database atau tidak menggunakan database dikosongkan saja.</h5>
        <h5>- Untuk window username 'root' dan password 'tidak pakai'</h5>
        <h5>- Untuk OS username 'root' dan password 'root'</h5>
    </div>
    <!-- ### akhir halaman ### -->
    <br><br>
    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
        <i class="fas fa-chevron-up"></i>
    </a>
</div>
<!-- akhir codeigniter setting -->