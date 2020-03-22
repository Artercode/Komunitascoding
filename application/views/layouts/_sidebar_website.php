<!-- Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- judul sidebar -->
   <a href="<?= base_url('Website') ?>" class="ml-3 brand-link">
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
               <a href="<?= base_url('Xampp') ?>" class="nav-link active">
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
                     <a href="<?= base_url('VScode/Instalasi') ?>" class="nav-link">
                        <i class="nav-icon far fa-circle"></i>
                        <p>VScode - Instalasi</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('VScode/Extension') ?>" class="nav-link">
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
                     <a href="<?= base_url('HTML/Kerangka_Dasar') ?>" class="nav-link">
                        <i class="nav-icon fas fa-code"></i>
                        <p>HTML - Kerangka Dasar</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="" class="nav-link">
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
                     <a href="<?= base_url('Codeigniter/Instalasi_Setting') ?>" class="nav-link">
                        <i class="nav-icon fab fa-free-code-camp"></i>
                        <p>CI - Instalasi & Setting</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('Codeigniter/Url_Uri') ?>" class="nav-link">
                        <i class="nav-icon fab fa-free-code-camp"></i>
                        <p>CI - Url & Uri</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('Codeigniter/MVC') ?>" class="nav-link">
                        <i class="nav-icon fab fa-free-code-camp"></i>
                        <p>CI - MVC</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('Codeigniter/CRUD') ?>" class="nav-link">
                        <i class="nav-icon fab fa-free-code-camp"></i>
                        <p>CI - CRUD</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('Codeigniter/Database') ?>" class="nav-link">
                        <i class="nav-icon fab fa-free-code-camp"></i>
                        <p>CI - Database</p>
                     </a>
                  </li>
               </ul>
            </li>
            <!-- bootstrap -->
            <li class="nav-item has-treeview">
               <a href="" class="nav-link active">
                  <i class="nav-icon fab  fa-fw fa-bootstrap"></i>
                  <p>Bootstrap<i class="right fas fa-angle-left"></i></p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="<?= base_url('Bootstrap/Instalasi') ?>" class="nav-link">
                        <i class="nav-icon fab  fa-fw fa-bootstrap"></i>
                        <p>BS - Instalasi</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('Bootstrap/GRID_Layout') ?>" class="nav-link">
                        <i class="nav-icon fab  fa-fw fa-bootstrap"></i>
                        <p>BS - GRID & Layout</p>
                     </a>
                  </li>
               </ul>
            </li>
            <!-- gado gado -->
            <li class="nav-item has-treeview">
               <a href="" class="nav-link active">
                  <i class="nav-icon fas fa-fw fa-cogs"></i>
                  <p>Gado Gado<i class="right fas fa-angle-left"></i></p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="<?= base_url('Website/IF') ?>" class="nav-link">
                        <i class="nav-icon far fa-fw fa-circle"></i>
                        <p>IF</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('Website/Responsive') ?>" class="nav-link">
                        <i class="nav-icon far fa-fw fa-circle"></i>
                        <p>Responsive</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('Website/Template_Dinamis') ?>" class="nav-link">
                        <i class="nav-icon far fa-fw fa-circle"></i>
                        <p>Template & Link Dinamis</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('Website/Session_Cookies') ?>" class="nav-link">
                        <i class="nav-icon far fa-fw fa-circle"></i>
                        <p>Sesssion & Cookies</p>
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