<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WEB_mvc extends MY_Controller
{
   public function index()
   {
      $data['title'] = 'WEB MVC';
      $data['page'] = 'pages/contekan/website/web_mvc';
      return $this->view($data);
   }
}
