<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Codeigniter extends MY_Controller
{
   public function instalasi()
   {
      $data['title'] = 'CI Instalasi';
      $data['page'] = 'pages/website/codeigniter/ci_instalasi';
      return $this->view($data);
   }

   public function setting()
   {
      $data['title'] = 'CI Setting';
      $data['page'] = 'pages/website/codeigniter/ci_setting';
      return $this->view($data);
   }

   public function url_uri()
   {
      $data['title'] = 'CI Url & Uri';
      $data['page'] = 'pages/website/codeigniter/ci_url_uri';
      return $this->view($data);
   }

   public function mvc()
   {
      $data['title'] = 'CI MVC';
      $data['page'] = 'pages/website/codeigniter/ci_mvc';
      return $this->view($data);
   }

   public function crud()
   {
      $data['title'] = 'CI CRUD';
      $data['page'] = 'pages/website/codeigniter/ci_crud';
      return $this->view($data);
   }
}
