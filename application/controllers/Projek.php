<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Projek extends MY_Controller
{
   private $id;

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

   public function index()
   {
      $data['title']      = 'Projek';
      $data['page']       = 'pages/auth/user/projek';

      return $this->view($data);
   }
}

/* End of file Profile.php */
