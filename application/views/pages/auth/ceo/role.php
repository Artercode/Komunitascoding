<!-- sekedar tau -->
<div class="content-wrapper">
   <!-- Sidebar  -->
   <?php $this->load->view('layouts/_sidebar_login'); ?>
   <!-- akhir sidebar -->

   <!-- ########## judul ########## -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-6">
               <h3 class="font-weight-bold text-gray"><i class="mx-1 fas fa-fw fa-user-lock"></i> Role</h3>
            </div>
            <!-- info -->
            <div class="h2 col-sm-6">
               <a class="float-sm-right" href="" id="dropdown" data-toggle="dropdown">
                  <i class="fas fa-fw fa-exclamation-circle"></i>
               </a>
               <!-- Dropdown info -->
               <div class="p-4 dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="dropdown">
                  <h6>Tempat menambah Role dan Akses halaman</h6>
                  <h6>Rencana update:</h6>
                  <h6>-avatar kiri atas kurang pas posisinya.</h6>
                  <h6>-bagian akses role belum bisa.</h6>
                  <h6>-bagian edit belum bisa.</h6>
               </div>
            </div>
            <!-- akhir info -->
         </div>
      </div>
   </section>
   <!-- ### akhir judul ### -->

   <!-- ########## halaman ########## -->
   <section>
      <!-- ########## container role ########## -->
      <div class="mt-n2 col-lg-11 container-fluid">
         <?php $this->load->view('layouts/_alert') ?>
         <!-- tabel role-->
         <div class="card col-md-6">
            <div class="card-header">
               <h1 class="card-title">Tabel Role</h1>
               <div class="card-tools">
                  <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#roleModal"><i class="mr-1 fas fa-fw fa-plus-circle"></i>Role</a>
               </div>
            </div>

            <div class="card-body p-0">
               <table class="table">
                  <thead>
                     <tr>
                        <th style="width: 20px">No</th>
                        <th style="width: 200px">Role</th>
                        <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $no = 1; ?>
                     <?php foreach ($role as $rl) : ?>
                        <tr>
                           <td style="text-align: center"><?= $no; ?></td>
                           <td><?= $rl['role']; ?></td>
                           <td>
                              <a href="<?= base_url('role/roleAccess/') . $rl['id']; ?>" class="badge badge-warning">akses</a>
                              <a href="<?= base_url() ?>role/editRole/<?= $rl['id']; ?>" class="badge badge-success" data-toggle="modal" data-target="#editRoleModal">edit</a>
                              <a href="<?= base_url() ?>role/hapusRole/<?= $rl['id']; ?>" class="badge badge-danger" onclick=" return confirm('yakin dihapus ?');">hapus</a>
                           </td>
                        </tr>
                        <?php $no++; ?>
                     <?php endforeach ?>
                  </tbody>
               </table>
            </div>
         </div>
         <!-- akhir tabel role-->
      </div>
</div>
<!-- ### container akhir role ### -->
</section>
<!-- ### akhir halaman ### -->
</div>

<!-- ########## modal tambah role ########## -->
<div class="modal fade" id="roleModal" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="roleModalLabel"><i class="fas fa-fw fa-plus-circle"></i> Role</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <form action="<?= base_url('role'); ?>" method="post">
            <!-- isi Modal -->
            <div class="modal-body">
               <div class="form-group">
                  <input type="text" class="form-control" id="role" name="role" placeholder="Nama Role">
               </div>
            </div>
            <!-- akhir isi modal -->
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
               <button type="submit" class="btn btn-primary"><i class="fas fa-fw fa-plus-circle"></i> Role</button>
            </div>
         </form>
      </div>
   </div>
</div>
<!-- ### akhir modal tambah role ### -->

<!-- ########## modal edit role ########## -->
<div class="modal fade" id="editRoleModal" tabindex="-1" role="dialog" aria-labelledby="editRoleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="editRoleModalLabel"><i class="fas fa-fw fa-pen-nib"></i> Edit Role</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <form action="<?= base_url('role/editRole'); ?>" method="post">
            <!-- isi Modal -->
            <div class="modal-body">
               <div class="form-group">
                  <input type="text" class="form-control" id="role" name="role" value="<?= $rl['role']; ?>">
               </div>
            </div>
            <!-- akhir isi modal -->
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
               <button type="submit" class="btn btn-primary"><i class="fas fa-fw fa-pen-nib"></i> Edit Role</button>
            </div>
         </form>
      </div>
   </div>
</div>
<!-- ### akhir modal edit role ### -->

</section>
<!-- ### akhir halaman ### -->
</div>
<!-- akhir sekedar tau -->