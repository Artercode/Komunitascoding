<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vscode extends MY_Controller
{
   public function instalasi()
   {
      $data['title'] = 'VScode';
      $data['page']  = 'pages/website/vscode/instalasi';
      return $this->view($data);
   }

   public function extension()
   {
      $data['title'] = 'VScode';
      $data['page']  = 'pages/website/vscode/extension';
      return $this->view($data);
   }
}
