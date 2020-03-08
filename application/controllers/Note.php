<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Note extends MY_Controller
{
   public function index()
   {
      $data['title'] = 'Note';
      $data['page']  = 'pages/home/note';

      return $this->view($data);
   }
}

/* End of file Controllername.php */
