<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HTML_kerangka_dasar extends MY_Controller
{
   public function index()
   {
      $data['title'] = 'Note';
      $data['page']  = 'pages/contekan/website/html_kerangkadasar';

      return $this->view($data);
   }
}

/* End of file Controllername.php */
