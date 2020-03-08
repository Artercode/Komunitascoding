<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Camp extends MY_Controller
{

   public function index()
   {
      $data['title'] = 'Camp';
      $data['page']  = 'pages/home/camp';

      return $this->view($data);
   }
}

/* End of file Controllername.php */
