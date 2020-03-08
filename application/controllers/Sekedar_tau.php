<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sekedar_tau extends MY_Controller
{

   public function index()
   {
      $data['title'] = 'Sekedar Tau';
      $data['page']  = 'pages/home/sekedar_tau';

      return $this->view($data);
   }
}

/* End of file Controllername.php */
