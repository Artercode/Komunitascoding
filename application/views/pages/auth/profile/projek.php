<!-- profil -->
<div class="content-wrapper">
    <!-- Sidebar  -->
    <?php $this->load->view('layouts/_sidebar_login'); ?>
    <!-- akhir sidebar -->

    <!-- ########## judul ########## -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="font-weight-bold text-gray"><i class="fas fa-fw fa-project-diagram"></i> Projek</h3>
                </div>
                <!-- info -->
                <div class="h2 col-sm-6">
                    <a class="float-sm-right" href="" id="dropdown" data-toggle="dropdown">
                        <i class="mx-1 fas fa-fw fa-exclamation-circle"></i>
                    </a>
                    <!-- Dropdown info -->
                    <div class="p-4 dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="dropdown">
                        <h6>Profile</h6>
                        <h6>Rencana update:</h6>
                        <h6>-form untuk buat projek, update dan delete.</h6>
                        <h6>-form projek awal load dalam keadaan tertutup</h6>
                        <h6> placeholder diskrimsi maksimum 2000 huruf.</h6>
                        <h6>-bagian tanya jawab/diskusi.</h6>
                        <h6>-checkbox untuk posting ke aula, selama 30hari</h6>
                        <h6>-batas waktu projek di anggota 365 hari.</h6>
                        <h6>-notivikasi bila ada balasan diskusi</h6>
                        <h6>-diskripsi gak bisa 100% width</h6>
                    </div>
                </div>
                <!-- akhir info -->
            </div>
        </div>
    </section>
    <!-- ### akhir judul ### -->

    <!-- ########## halaman profile ########## -->
    <section>
        <div class="row">
            <div class="mt-n2 col-lg-11 container-fluid">
                <!-- form projek -->
                <div class="card bg-gradient-info  collapsed">
                    <div class="card-header border-0">
                        <h3 class="card-title">Buat projek baru.</h3>
                        <div class="card-tools">
                            <button type="submit" class="mr-2 btn btn-sm btn-primary">Posting</button>
                            <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="mt-n4 col-md-6">
                                <!-- nama projek -->
                                <tr>
                                    <td>
                                        <h5>Nama Projek:</h5>
                                    </td>
                                    <td>
                                        <form action="" method="POST">
                                            <div class="mb-3 input-group">
                                                <input type="text" name="name" value="" class="form-control" placeholder="maksimum 20 huruf" max_length[20] required>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                <!-- info projek -->
                                <tr>
                                    <td>
                                        <h5>Info Projek:</h5>
                                    </td>
                                    <td>
                                        <form action="" method="POST">
                                            <div class="mb-3 input-group">
                                                <input type="text" name="name" value="" class="form-control" placeholder="maksimum 20 huruf" max_length[20] required>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                <!-- program yang digunakan -->
                                <tr>
                                    <td>
                                        <h5>Program yang digunakan:</h5>
                                    </td>
                                    <td>
                                        <form action="" method="POST">
                                            <div class="mb-3 input-group">
                                                <input type="text" name="name" value="" class="form-control" placeholder="maksimum 20 huruf" max_length[20] required>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            </div>
                            <div class="mt-n4 col-md-6">
                                <h5>Diskripsi:</h5>
                                <textarea placeholder="maksimum 2000 huruf" max_length[2000] style="min-height: 210px; height: 210px; width: 445px;">
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- akhir form projek -->

                <!-- projek list -->
                <div class="mb-3 card card-outline card-indigo collapsed">
                    <!-- card head -->
                    <div class="card-header">
                        <table class="table m-n3">
                            <tbody>
                                <tr>
                                    <td style="width: 1px">
                                        <div class=" icheck-indigo d-inline">
                                            <input type="checkbox" id="checkbox1" checked>
                                            <label for="checkbox1"></label>
                                        </div>
                                    </td>
                                    <td>29h 12:05</td>
                                    <td>Login3Admin</td>
                                    <td>Sistim Login</td>
                                    <td>CI-BS</td>
                                    <td>Arter Code</td>
                                    <td>
                                        <div class="card-tools float-right">
                                            <a href="https://github.com/Artercode/login3admin" target="_blank" type="button" class="btn btn-sm btn-info">Github Projek</a>
                                            <button type="button" class="mr-n4 btn btn-tool" data-card-widget="collapse"><i class="fas fa-fw fa-plus"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- card body -->
                    <div class="card-body" style="display: none;">
                        <h5>Diskripsi:</h5>
                        <h6>- Login (full dinamis)</h6>
                        <h6>- Admin 3 tingkat</h6>
                        <h6>- Profil lengkap</h6>
                        <h6>- framework: Codeigniter - AdminLTE-3.0.2</h6>
                    </div>
                    <!-- card footer -->
                    <!-- tempat diskusi -->
                </div>
                <!-- akhir projek list -->
            </div>
        </div>
    </section>
    <!-- ### akhir halaman profile ### -->
</div>
<!-- akhir profil -->