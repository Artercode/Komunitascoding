<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lupapassword extends MY_Controller
{
   public function index()
   {
      $input  = (object) $this->input->post(null, true);

      $data['title']  = 'Lupa Password';
      $data['input']  = $input;
      $data['page']   = 'pages/auth/lupapassword';
      $this->view($data);
      return;


      if ($this->lupapassword->run($input)) {
         $this->session->set_flashdata('success', 'Password berhasil dikirim ke email anda!');
         redirect(base_url());
      } else {
         $this->session->set_flashdata('error', 'Ooops! Terjadi kesalahan!');
         redirect(base_url('lupapassword'));
      }
   }
}

/* End of file Lupapassword.php */
