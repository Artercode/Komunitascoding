<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HTML extends MY_Controller
{
   public function Kerangka_dasar()
   {
      $data['title'] = 'Note';
      $data['page']  = 'pages/website/html/kerangka_dasar';

      return $this->view($data);
   }
}

/* End of file Controllername.php */
