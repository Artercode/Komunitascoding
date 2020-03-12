<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aula_projek extends MY_Controller
{
   public function index()
   {
      $data['title'] = 'Aula Projek';
      $data['page']  = 'pages/aula/aula_projek';
      return $this->view($data);
   }
}
