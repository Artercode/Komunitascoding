<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Role extends MY_Controller
{
   private $id;
   protected $table = 'user_id';

   public function __construct()
   {
      parent::__construct();
      $is_login   = $this->session->userdata('is_login');
      $this->id   = $this->session->userdata('id');
      // jika belum login akan diarahkan ke halaman home
      if (!$is_login) {
         redirect(base_url());
         return;
      }
   }


   public function index($page = null)
   {
      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();

      $this->form_validation->set_rules('role', 'Role', 'required');
      if ($this->form_validation->run() == false) {
         $data['title']    = 'Role';
         $data['role']     = $this->db->get('user_role')->result_array();
         $data['page']     = 'pages/auth/ceo/role';

         return $this->view($data);
      } else {
         // menambah database -> tabel user_menu
         $this->db->insert('user_role', ['role' => $this->input->post('role')]);
         $this->session->set_flashdata('success', 'Role baru berhasil ditambahkan');
         redirect('role');
      }
   }

   public function roleAccess($role_id)
   {
      $data['title'] = 'Role Access';
      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();

      $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
      // supaya check list untuk ceo tidak nampak
      $this->db->where('id !=', 1);
      $data['menu'] = $this->db->get('user_menu')->result_array();

      $this->load->view('templates/header_login', $data);
      $this->load->view('templates/sidebar_login', $data);
      $this->load->view('templates/topbar_login', $data);
      $this->load->view('ceo/roleaccess', $data);
      $this->load->view('templates/footer_login');
   }

   // method untuk ajak yang di bagian layouts/index.php
   public function changeAccess()
   {
      // mengambil data dari ajak
      $menu_id = $this->input->post('menuId');
      $role_id = $this->input->post('roleId');
      // ambil data dari ajak cek ke database user_access_menu
      $data = [
         'role_id' => $role_id,
         'menu_id' => $menu_id
      ];
      $result = $this->db->get_where('user_access_menu', $data);
      if ($result->num_rows() < 1) {
         $this->db->insert('user_access_menu', $data);
      } else {
         $this->db->delete('user_access_menu', $data);
      }
      // alert
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Access berhasil dirubah!</div>');
   }

   public function editRole($id)
   {
      $this->form_validation->set_rules('role', 'Role', 'required');

      $data['title']    = 'Role';
      $data['role']     = $this->db->get_where('user_role', ['id' =>
      $this->session->userdata('id')])->row_array();
      $data['page']     = 'pages/auth/ceo/role';

      return $this->view($data);

      if ($this->role->where('id', $id)->update($data['input'])) {
         $this->session->set_flashdata('success', 'Data berhasil disimpan!');
      } else {
         $this->session->set_flashdata('error', 'Ooops! Terjadi suatu kesalahan');
      }
      redirect(base_url('role'));
   }

   public function hapusRole($id)
   {
      $this->db->delete('user_role', ['id' => $id]);
      $this->session->set_flashdata('success', 'Role berhasil dihapus');
      redirect('role');
   }
}

/* End of file Profile.php */
