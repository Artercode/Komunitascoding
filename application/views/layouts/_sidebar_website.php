<!-- Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- judul sidebar -->
    <a href="<?= base_url('website') ?>" class="ml-3 brand-link">
        <i class="fas fa-globe ml-1"></i>
        <span class="brand-text font-weight-light ml-1">Website</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- xampp -->
                <li class="nav-item">
                    <a href="<?= base_url('xampp') ?>" class="nav-link">
                        <i class="far fa-fw fa-dot-circle"></i>
                        <p>
                            Xampp
                        </p>
                    </a>
                </li>
                <!-- visual studio code -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="far fa-fw fa-dot-circle"></i>
                        <p>
                            Visual Studio Code
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('vscode_instalasi') ?>" class="nav-link">
                                <i class="far fa-fw fa-circle"></i>
                                <p>VScode - Instalasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('vscode_extension') ?>" class="nav-link">
                                <i class="far fa-fw fa-circle"></i>
                                <p>VScode - Extensions</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- html -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-fw fa-code"></i>
                        <p>
                            HTML
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('HTML_kerangka_dasar') ?>" class="nav-link">
                                <i class="fas fa-fw fa-code"></i>
                                <p>HTML - Kerangka Dasar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('website') ?>" class="nav-link">
                                <i class="fas fa-fw fa-code"></i>
                                <p>HTML - </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- codeigniter -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Codeigniter
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('website/codeigniter_instalasi') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Codeigniter - Instalasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('website/codeigniter_setting') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Codeigniter - Setting</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- bootstrap -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Bootstrap
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('website/bootstrap_instalasi') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bootstrap - Instalasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('website/bootstrap_setting') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bootstrap - Setting</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- web sistem -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Web Sistim
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('website/websistim_responsive') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Web Responsive</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('website/websistim_templatedinamis') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tamplate Dinamis</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('website/websistim_mvc') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>MVC</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('website/websistim_crud') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>CRUD</p>
                            </a>
                        </li>
                    </ul>
                </li>





            </ul>
        </nav>
        <!-- Akhir sidebar menu -->
    </div>
    <!-- akhir sidebar -->
</aside>