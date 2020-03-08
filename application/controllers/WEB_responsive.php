<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WEB_responsive extends MY_Controller
{
   public function index()
   {
      $data['title'] = 'Responsive';
      $data['page'] = 'pages/contekan/website/web_responsive';
      return $this->view($data);
   }
}
