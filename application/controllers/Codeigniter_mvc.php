<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Codeigniter_mvc extends MY_Controller
{
   public function index()
   {
      $data['title'] = 'CI MVC';
      $data['page'] = 'pages/contekan/website/ci_mvc';
      return $this->view($data);
   }
}
