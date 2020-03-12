<!-- Sidebar  -->
<aside class="main-sidebar sidebar-dark-primary elevation-3">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="./images/user/avatar.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">
            <?php if (!$this->session->userdata('is_login')) : ?>
                <div class="mb-n3 row">
                    <i class="mx-1 mt-1 fas fa-fw fa-child"></i>
                    <p>Selamat Datang</p>
                </div>
            <?php else : ?>
                <?= $this->session->userdata('name') ?>
            <?php endif ?>
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- ########## selamat datang ########## -->
                <li class="nav-item has-treeview menu-close">
                    <a href="" class="nav-link active">
                        <i class="nav-icon fas fa-child"></i>
                        <p>Selamat Datang<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('/') ?>" class="nav-link active">
                                <i class="nav-icon fas fa-child"></i>
                                <p>Selamat Datang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('note') ?>" class="nav-link active">
                                <i class="nav-icon far fa-sticky-note"></i>
                                <p>Note</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('camp') ?>" class="nav-link active">
                                <i class="nav-icon fas fa-campground"></i>
                                <p>Camp</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- ########## sekedar tau ########## -->
                <li class="nav-item">
                    <a href="<?= base_url('sekedar_tau') ?>" class="nav-link">
                        <i class="nav-icon fas fa-feather"></i>
                        <p>Sekedar Tau<span class="right badge badge-danger">Baru</span></p>
                    </a>
                </li>
                <!-- ########## aula ########## -->
                <li class="nav-item has-treeview menu-open">
                    <a href="<?= base_url('/') ?>" class="nav-link active">
                        <i class="nav-icon fas fa-chair"></i>
                        <p>Aula<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-question"></i>
                                <p>Tanya</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('aula_projek') ?>" class="nav-link active">
                                <i class="nav-icon fas fa-project-diagram"></i>
                                <p>Projek</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-users-cog"></i>
                                <p>Grup</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- ########## Contekan ########## -->
                <li class="nav-item has-treeview menu-open">
                    <a href="" class="nav-link active">
                        <i class="nav-icon fas fa-chess-board"></i>
                        <p>Contekan<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('website') ?>" class="nav-link active">
                                <i class="nav-icon fas fa-globe"></i>
                                <p>Website</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link active">
                                <i class="nav-icon fab fa-android"></i>
                                <p>Android App & Game</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link active">
                                <i class="nav-icon fas fa-archive"></i>
                                <p>Arsip</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<!-- akhir sidebar -->