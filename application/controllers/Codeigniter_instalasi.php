<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Codeigniter_instalasi extends MY_Controller
{
   public function index()
   {
      $data['title'] = 'CI Instalasi';
      $data['page'] = 'pages/contekan/website/codeigniter_instalasi';
      return $this->view($data);
   }
}
