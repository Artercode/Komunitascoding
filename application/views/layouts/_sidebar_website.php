<!-- Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- judul sidebar -->
    <a href="<?= base_url('website') ?>" class="ml-3 brand-link">
        <i class="nav-icon ml-1 fas fa-globe"></i>
        <span class="brand-text font-weight-light ml-1">Website</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- xampp -->
                <li class="nav-item">
                    <a href="<?= base_url('xampp') ?>" class="nav-link active">
                        <i class="nav-icon fas fa-bone"></i>
                        <p>Xampp</p>
                    </a>
                </li>
                <!-- visual studio code -->
                <li class="nav-item has-treeview">
                    <a href="" class="nav-link active">
                        <i class="nav-icon far fa-dot-circle"></i>
                        <p>Visual Studio Code<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('vscode_instalasi') ?>" class="nav-link">
                                <i class="nav-icon far fa-circle"></i>
                                <p>VScode - Instalasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('vscode_extension') ?>" class="nav-link">
                                <i class="nav-icon far fa-circle"></i>
                                <p>VScode - Extensions</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- html -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-code"></i>
                        <p>HTML<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('HTML_kerangka_dasar') ?>" class="nav-link">
                                <i class="nav-icon fas fa-code"></i>
                                <p>HTML - Kerangka Dasar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('website') ?>" class="nav-link">
                                <i class="nav-icon fas fa-code"></i>
                                <p>HTML - </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- codeigniter -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fab fa-free-code-camp"></i>
                        <p>Codeigniter<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('codeigniter_instalasi') ?>" class="nav-link">
                                <i class="nav-icon fab fa-free-code-camp"></i>
                                <p>Codeigniter - Instalasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('codeigniter_setting') ?>" class="nav-link">
                                <i class="nav-icon fab fa-free-code-camp"></i>
                                <p>Codeigniter - Setting</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- bootstrap -->
                <li class="nav-item has-treeview">
                    <a href="" class="nav-link active">
                        <i class="nav-icon fab fa-bootstrap"></i>
                        <p>Bootstrap<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('bootstrap_instalasi') ?>" class="nav-link">
                                <i class="nav-icon fab fa-bootstrap"></i>
                                <p>Bootstrap - Instalasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('bootstrap_setting') ?>" class="nav-link">
                                <i class="nav-icon fab fa-bootstrap"></i>
                                <p>Bootstrap - Setting</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- web sistem -->
                <li class="nav-item has-treeview">
                    <a href="" class="nav-link active">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>Web Sistem<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('WEB_responsive') ?>" class="nav-link">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Web Responsive</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('WEB_template_dinamis') ?>" class="nav-link">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Tamplate Dinamis</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('WEB_mvc') ?>" class="nav-link">
                                <i class="nav-icon far fa-circle"></i>
                                <p>MVC</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('website/websistim_crud') ?>" class="nav-link">
                                <i class="nav-icon far fa-circle"></i>
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