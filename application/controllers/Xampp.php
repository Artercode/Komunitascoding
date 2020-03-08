<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Xampp extends MY_Controller
{
   public function index()
   {
      $data['title'] = 'Xampp';
      $data['page']  = 'pages/contekan/website/xampp';
      return $this->view($data);
   }
}
