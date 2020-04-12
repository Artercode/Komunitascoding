<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ukm_kasir extends MY_Controller
{
   public function index()
   {
      $data['title'] = 'UKM Kasir';
      $data['page']  = 'ukm_kasir/index';
      return $this->view($data);
   }
}
