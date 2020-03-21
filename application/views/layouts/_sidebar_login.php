<!-- Sidebar  -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="./images/user/avatar.jpg" alt="" class="brand-image img-circle elevation-3" style="opacity: .3">
        <span class="brand-text font-weight-light"><?= $this->session->userdata('name') ?></span>
    </a>

    <!-- Sidebar Menu -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- ########## ceo ########## -->
                <li class="mb-1 nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="mx-1 fas fa-fw fa-user-tag"></i>
                        <p>
                            CEO
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('role_menu_access') ?>" class="nav-link">
                                <i class="mx-1 fas fa-fw fa-user-lock"></i>
                                <p>Role & Menu Akses</p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="./index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Menu & Submenu</p>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a href="./index3.html" class="nav-link">
                                <i class="mx-1 far fa-fw fa-user-circle"></i>
                                <p>Tabel Admin</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- ########## admin ########## -->
                <li class="mb-1 nav-item has-treeview menu-close">
                    <a href="#" class="nav-link active">
                        <i class="mx-1 fas fa-fw fa-users-cog"></i>
                        <p>
                            Admin
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./index2.html" class="nav-link">
                                <i class="mx-1 fas fa-fw fa-question"></i>
                                <p>Tabel Tanya</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index3.html" class="nav-link">
                                <i class="mx-1 fas fa-fw fa-project-diagram"></i>
                                <p>Tabel Projek</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index3.html" class="nav-link">
                                <i class="mx-1 fas fa-fw fa-users"></i>
                                <p>Tabel Grup</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index2.html" class="nav-link">
                                <i class="mx-1 far fa-fw fa-user-circle"></i>
                                <p>Tabel User</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- ########## anggota ########## -->
                <li class="mb-1 nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="mx-1 far fa-fw fa-user-circle"></i>
                        <p>
                            User
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('user') ?>" class="nav-link active">
                                <i class="mx-1 far fa-fw fa-id-badge"></i>
                                <p>Profil</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index2.html" class="nav-link">
                                <i class="mx-1 fas fa-fw fa-question"></i>
                                <p>Tanya</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('projek') ?>" class="nav-link">
                                <i class="mx-1 fas fa-fw fa-project-diagram"></i>
                                <p>Projek</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index3.html" class="nav-link">
                                <i class="mx-1 fas fa-fw fa-users"></i>
                                <p>Grup</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <!-- akhir sidebar menu -->
</aside>
<!-- akhir sidebar -->