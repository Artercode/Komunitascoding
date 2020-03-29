<!-- bootstrap grid layout -->
<div class="content-wrapper">
   <!-- Sidebar  -->
   <?php $this->load->view('layouts/_sidebar_website'); ?>
   <!-- akhir sidebar -->

   <!-- ########## judul ########## -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mx-1">
            <div class="col-sm-6">
               <h3 class="font-weight-bold text-gray"><i class="fab fa-free-code-camp"></i> Codeigniter - Database</h3>
            </div>
            <!-- info -->
            <div class="h2 col-sm-6">
               <a class="float-sm-right" href="#" id="dropdown" data-toggle="dropdown">
                  <i class="fas fa-fw fa-exclamation-circle"></i>
               </a>
               <!-- Dropdown info -->
               <div class="p-4 dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="dropdown">
                  <div class="h6">
                     1. Bila ada salah ketik atau kurang lengkap, sampaikan ke admin akan segera kami perbaiki. <br>
                     2. Bila ada cara yang lebih baik, mudah dan cepat, untuk mempelajari infokan ke admin. <a href="<?= base_url('/') ?>"><kbd>Kontak</kbd></a> <br>
                     3. Ide dan koreksi sangat berharga buat kami. <br>
                     4. Semoga bermanfaat buat kita semua. <br>
                     5. Terima kasih atas supportnya untuk Komunitascoding.
                  </div>
               </div>
            </div>
            <!-- akhir info -->
         </div>
      </div>
   </section>
   <!-- ### akhir judul ### -->

   <!-- ########## halaman ########## -->
   <div class="col-lg-11 mt-n2 container-fluid">
      <!-- ########## novtaps ############################################################# -->
      <div class="card card-body card-primary card-outline">
         <div class="row">
            <!-- bagian ulasan -->
            <div class="col-9 col-dm-9">
               <div class="tab-content" id="vert-tabs-right-tabContent">
                  <!-- intro -->
                  <div class="tab-pane fade show active" id="vert-tabs-right-1" role="tabpanel" aria-labelledby="vert-tabs-right-1-tab">
                     <div class="h5">
                        Untuk penyimpanan database dilakuan oleh phpMyAdmin, <br>
                        jika kita menggunakan <a href="<?= base_url('xampp') ?>" target="_blank">Xampp</a> phpMyAdmin sudah ada didalamnya tinggal pakai.<br>
                        Semua data dalam phpMyAdmin di simpan dalam bentuk tabel. <br>
                        Untuk pengelolaan data kita gunakan cara <a href="<?= base_url('codeigniter/crud') ?>" target="_blank">CRUD</a>, <br>
                        yang biasanya ditempatkan di bagian folder models sesuai dengan sistim <a href="<?= base_url('codeigniter/mvc') ?>" target="_blank">MVC</a>
                        <br><br>
                        Contoh tabel Anggota : <br>
                     </div>
                     <table class="table table-bordered">
                        <tr>
                           <th>No</th>
                           <th>Nama</th>
                           <th>Email</th>
                           <th>Password</th>
                        </tr>
                        <tr>
                           <th>1</th>
                           <td>User</td>
                           <td>user@mail.com</td>
                           <td>12341234</td>
                        </tr>
                        <tr>
                           <th>2</th>
                           <td>Admin</td>
                           <td>admin@mail.com</td>
                           <td>12341234</td>
                        </tr>
                     </table>
                  </div>
                  <!-- type data -->
                  <div class="tab-pane fade" id="vert-tabs-right-3" role="tabpanel" aria-labelledby="vert-tabs-right-3-tab">
                     <div class="h5">
                        Hanya 2 type data untuk distribusi : data Object dan array.
                        Cara coding data object dan array berbeda, gak bisa dicampur aduk.
                        <br><br>
                        OBJECT <br>
                        1. Penggunaan tanda -> , <i class="text-olive">tidak termasuk tanda -> milik Codeigniter</i> <br>
                        2. Penulisan di foreach <code>&lt?= $data->name ?&gt</code> <br>
                        3. ->row (untuk ambil 1 row) dan ->result (untuk ambil 1 tabel) <br>
                        --<code> $input = $this->input->post(null, true)->row();</code> <br>
                        --<code> $data['content'] = $this->db->get('Nama_tabel', $email)->result();</code> <br>
                        4. merubah data dari array ke object <br>
                        --<code> $data['content'] = (object) $this->db->get_where('id', $id);</code> <br>
                        --<code> $this->input->post(null, true);</code> bawaan berupa array <br>

                        5. Kerja server lebih ringan dengan mengunakan data object.
                        <br><br>
                        ARRAY <br>
                        1. Penggunaan tanda [ ] dan => <br>
                        --<code> $data = [ <br>
                           'name' => $this->input->post('name')<br>
                           ];</code> <br>
                        2. Penulisan di foreach <code>&lt?= $data['name'] ?&gt</code> <br>
                        3. ->row_array (untuk ambil 1 row) dan ->result_array (untuk ambil 1 tabel) <br>
                        --<code> $input = $this->input->post(null, true)->row_array();</code> <br>
                        --<code> $data['content'] = $this->db->get('Nama_tabel')->result_array();</code> <br>
                        4. merubah data dari object ke array <br>
                        --<code> $content->row_array();</code> <i class="text-olive">jika data content berupa object.</i> <br>

                        <!-- 5. Semua data yang diambil dari inputan dan database, dasarnya berupa type array. -->
                        <br><br>
                     </div>
                  </div>
                  <!-- jumlah data -->
                  <div class="tab-pane fade" id="vert-tabs-right-2" role="tabpanel" aria-labelledby="vert-tabs-right-2-tab">
                     <h5>1. Pakem</h5>

                  </div>
                  <br><br>
               </div>
            </div>

            <!-- bagian taps  -->
            <div class="col-3 col-dm-3">
               <div class="nav flex-column nav-tabs nav-tabs-right h-100" id="vert-tabs-right-tab" role="tablist" aria-orientation="vertical">
                  <!-- intro -->
                  <a class="nav-link active" id="vert-tabs-right-1-tab" data-toggle="pill" href="#vert-tabs-right-1" role="tab" aria-controls="vert-tabs-right-1" aria-selected="false">Intro</a>
                  <!-- type data -->
                  <a class="nav-link" id="vert-tabs-right-3-tab" data-toggle="pill" href="#vert-tabs-right-3" role="tab" aria-controls="vert-tabs-right-3" aria-selected="false">Object & Array</a>
                  <!-- junlah data -->
                  <a class="nav-link" id="vert-tabs-right-2-tab" data-toggle="pill" href="#vert-tabs-right-2" role="tab" aria-controls="vert-tabs-right-2" aria-selected="false">Jumlah Data</a>
               </div>
            </div>
         </div>
      </div>
      <!-- ### akhir navtaps ### -->
   </div>
   <!-- ### akhir halaman ### -->
   <br><br>
   <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
   </a>
</div>
<!-- akhir bootstrap grid layout-->