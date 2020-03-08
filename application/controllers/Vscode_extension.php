<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vscode_extension extends MY_Controller
{
   public function index()
   {
      $data['title'] = 'VScode';
      $data['page']  = 'pages/contekan/website/vscode_extension';
      return $this->view($data);
   }
}
