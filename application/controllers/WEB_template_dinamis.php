<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WEB_template_dinamis extends MY_Controller
{
   public function index()
   {
      $data['title'] = 'Template Dinamis';
      $data['page'] = 'pages/contekan/website/web_template_dinamis';
      return $this->view($data);
   }
}
