<!-- ########## container halaman ########## -->
<div class="content-wrapper">
    <div class="container mx-1">
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
            <div class="card p-1 shadow col-md-6">
                <img src="<?= base_url('assets/img/website/codeigniter-setting.jpg') ?>" class="img-fluid" alt="">
            </div>
            <h6>1. Buka application/config/config.php (untuk menampilkan projek di browser)</h6>
            <h6>- [26] $config['base_url'] = 'http://localhost/nama-file-projek/';</h6>
            <h6>2. Buka application/config/routers.php (menentukan halaman beranda yang kita digunakan)</h6>
            <h6>- [52] $route['default_controller'] = 'welcome';</h6>
            <h6>- Sebelumnya buatlah halaman beranda.php di dalam folder views (folder dan file view, awalan gunakan menggunakan huruf kecil).</h6>
            <h6>3. Buka application/config/autoload.php (setting libraries dan helper yang akan kita gunakan)</h6>
            <h6>- [61] $autoload['libraries'] = array('database', 'email', 'session', 'form_validation');</h6>
            <h6>- [92] $autoload['helper'] = array('url', 'form', 'file', 'security');</h6>
            <h6>4. Buka application/config/database.php</h6>
            <h6>- [79] 'username' => 'root',</h6>
            <h6>- [80] 'password' => '',</h6>
            <h6>- [81] 'database' => 'nama-folder-database', (harus sama dengan yang di phpMyAdmin)</h6>
            <h6>- Untuk window username 'root' dan password ''</h6>
            <h6>- Untuk OS username 'root' dan password 'root'</h6>
            <h6>5. Menghilangkan penulisan index.php di url:</h6>
            <h6>dengan membuat file .htaccess (Tanpa extension) di folder projek , sejajar dengan folder application dll</h6>
            <h6><a href="https://codeigniter.com/user_guide/general/urls.html?highlight=htaccess" target="_blank">https://codeigniter.com/user_guide/general/urls.html?highlight=htaccess</a></h6>
            atau :
            <pre>
    RewriteEngine On
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
            <div class="card p-1 shadow col-md-6">
                <img src="<?= base_url('assets/img/website/codeigniter-setting2.jpg') ?>" class="img-fluid" alt="">
            </div>
            <h6>6. Bila halaman web sudah tampil di browser berati codeigniter sudah tersetting dengan benar.</h6>
        </div>
        <br><br>

        <!-- icon sroll atas -->
        <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <!-- ### akhir container card ### -->
</div>
<!-- ### akhir container halaman ### -->