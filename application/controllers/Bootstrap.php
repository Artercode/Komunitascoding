<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bootstrap extends MY_Controller
{
   public function instalasi()
   {
      $data['title'] = 'BS Instalasi';
      $data['page']  = 'pages/website/bootstrap/bs_instalasi';
      return $this->view($data);
   }

   public function grid_layout()
   {
      $data['title'] = 'BS GRID Layout';
      $data['page'] = 'pages/website/bootstrap/bs_grid_layout';
      return $this->view($data);
   }
}
