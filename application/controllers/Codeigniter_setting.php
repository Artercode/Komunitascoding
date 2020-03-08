<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Codeigniter_setting extends MY_Controller
{
   public function index()
   {
      $data['title'] = 'CI Setting';
      $data['page'] = 'pages/contekan/website/codeigniter_setting';
      return $this->view($data);
   }
}
