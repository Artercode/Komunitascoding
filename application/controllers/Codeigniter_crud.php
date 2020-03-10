<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Codeigniter_crud extends MY_Controller
{
   public function index()
   {
      $data['title'] = 'CI CRUD';
      $data['page'] = 'pages/contekan/website/ci_crud';
      return $this->view($data);
   }
}
