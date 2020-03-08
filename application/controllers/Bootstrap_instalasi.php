<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bootstrap_instalasi extends MY_Controller
{
   public function index()
   {
      $data['title'] = 'BS Instalasi';
      $data['page']  = 'pages/contekan/website/bootstrap_instalasi';
      return $this->view($data);
   }
}
