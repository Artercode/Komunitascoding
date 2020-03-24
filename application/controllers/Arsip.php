<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Arsip extends MY_Controller
{
   public function index()
   {
      $data['title']      = 'Arsip';
      $data['page']       = 'pages/arsip';

      return $this->view($data);
   }
}

/* End of file Profile.php */
