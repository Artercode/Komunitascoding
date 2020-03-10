<?php
defined('BASEPATH') or exit('No direct script access allowed');

class bootstrap_grid_layout extends MY_Controller
{
   public function index()
   {
      $data['title'] = 'BS GRID Layout';
      $data['page'] = 'pages/contekan/website/bs_grid_layout';
      return $this->view($data);
   }
}
