<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bootstrap_setting extends MY_Controller
{
   public function index()
   {
      $data['title'] = 'BS Setting';
      $data['page']  = 'pages/contekan/website/bs_setting';
      return $this->view($data);
   }
}
