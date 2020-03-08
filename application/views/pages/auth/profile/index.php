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
                    <h3 class="font-weight-bold text-gray"><i class="mx-1 far fa-fw fa-id-badge"></i>Profile</h3>
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
                        <h6>-Encrysi password belum</h6>
                        <h6>-bagian edit belum.</h6>
                        <h6>-popover belum bisa, untuk ganti password.</h6>
                        <h6>-map yang outomatis set sesuai alamat</h6>
                        <h6>-checkbox dan nama tidak pas tengah baris</h6>
                        <h6>-checkbox untuk privat/public</h6>
                        <h6>-sidebar active kalau di klik</h6>
                        <h6>resposibel</h6>
                        <h6>crop foto supaya sesuai kebutuhan</h6>

                    </div>
                </div>
                <!-- akhir info -->
            </div>
        </div>
    </section>
    <!-- ### akhir judul ### -->

    <!-- ########## isi profile ########## -->
    <section>
        <div class="mt-n2 col-lg-11 container-fluid">
            <div class="row">

                <div class="col-md-3">
                    <!-- ########## foto dan edit password ########## -->
                    <div class="card">
                        <img src="images/user/avatar.jpg" alt="" height="" class="p-2 card-img-top">

                        <div class="card-footer">
                            <div class="input-group-append">
                                <button class="btn btn-primary">Edit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <!-- ########## data anggota ########## -->
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="pt-1 card-title">Data Profile - [lama bergabung] - tlg bergabung</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <tbody>
                                        <!-- nama -->
                                        <tr>
                                            <td>
                                                <div class="icheck-primary d-inline">
                                                    <input type="checkbox" id="checkboxPrimary1" checked>
                                                    <label for="checkboxPrimary1"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <h5>Nama</h5>
                                            </td>
                                            <td>
                                                <form action="" method="POST">
                                                    <div class="input-group">
                                                        <input type="text" name="name" value="" class="form-control" placeholder="<?= $content->name ?>" required>
                                                        <div class="input-group-append">
                                                            <button type="submit" class="btn btn-primary" onclick="return confirm('Click, OK untuk edit.')">Edit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                        <!-- alamat -->
                                        <tr>
                                            <td>
                                                <div class="icheck-primary d-inline">
                                                    <input type="checkbox" id="checkboxPrimary2" checked>
                                                    <label for="checkboxPrimary2"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <h5>Alamat</h5>
                                            </td>
                                            <td>
                                                <form action="" method="POST">
                                                    <div class="input-group">
                                                        <input type="text" name="name" value="" class="form-control" placeholder="<?= $content->alamat ?>" required>
                                                        <div class="input-group-append">
                                                            <button type="submit" class="btn btn-primary" onclick="return confirm('Click, OK untuk edit.')">Edit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                        <!-- kota -->
                                        <tr>
                                            <td>
                                                <div class="icheck-primary d-inline">
                                                    <input type="checkbox" id="checkboxPrimary3">
                                                    <label for="checkboxPrimary3"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <h5>Kota</h5>
                                            </td>
                                            <td>
                                                <form action="" method="POST">
                                                    <div class="input-group">
                                                        <input type="text" name="name" value="" class="form-control" placeholder="<?= $content->kota ?>" required>
                                                        <div class="input-group-append">
                                                            <button type="submit" class="btn btn-primary" onclick="return confirm('Click, OK untuk edit.')">Edit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                        <!-- provinsi -->
                                        <tr>
                                            <td>
                                                <div class="icheck-primary d-inline">
                                                    <input type="checkbox" id="checkboxPrimary3">
                                                    <label for="checkboxPrimary3"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <h5>Provinsi</h5>
                                            </td>
                                            <td>
                                                <form action="" method="POST">
                                                    <div class="input-group">
                                                        <input type="text" name="name" value="" class="form-control" placeholder="<?= $content->provinsi ?>" required>
                                                        <div class="input-group-append">
                                                            <button type="submit" class="btn btn-primary" onclick="return confirm('Click, OK untuk edit.')">Edit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                        <!-- handphone -->
                                        <tr>
                                            <td>
                                                <div class="icheck-primary d-inline">
                                                    <input type="checkbox" id="checkboxPrimary4" checked>
                                                    <label for="checkboxPrimary1"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <h5>Handphone</h5>
                                            </td>
                                            <td>
                                                <form action="" method="POST">
                                                    <div class="input-group">
                                                        <input type="text" name="name" value="" class="form-control" placeholder="<?= $content->handphone ?>" required>
                                                        <div class="input-group-append">
                                                            <button type="submit" class="btn btn-primary" onclick="return confirm('Click, OK untuk edit.')">Edit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                        <!-- email -->
                                        <tr>
                                            <td>
                                                <div class="icheck-primary d-inline">
                                                    <input type="checkbox" id="checkboxPrimary5" checked>
                                                    <label for="checkboxPrimary1"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <h5>Email</h5>
                                            </td>
                                            <td>
                                                <form action="" method="POST">
                                                    <div class="input-group">
                                                        <input type="text" name="name" value="<?= $content->email ?>" class="form-control" readonly>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                        <!-- password -->
                                        <tr>
                                            <td></td>
                                            <td>
                                                <h5>Password</h5>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" name="password" class="form-control" placeholder="Ubah Password --->" readonly>
                                                    <div class="input-group-append">
                                                        <a tabindex="0" class="btn btn-danger" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- github -->
                                        <tr>
                                            <td>
                                                <div class="icheck-primary d-inline">
                                                    <input type="checkbox" id="checkboxPrimary6" checked>
                                                    <label for="checkboxPrimary6"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <h5>Github</h5>
                                            </td>
                                            <td>
                                                <form action="" method="POST">
                                                    <div class="input-group">
                                                        <input type="text" name="name" value="" class="form-control" placeholder="<?= $content->github ?>" required>
                                                        <div class="input-group-append">
                                                            <button type="submit" class="btn btn-primary" onclick="return confirm('Click, OK untuk edit.')">Edit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
    </section>
    <!-- ### akhir isi profile ### -->
</div>
<!-- akhir profil -->