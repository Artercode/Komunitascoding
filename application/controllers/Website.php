<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Website extends MY_Controller
{
    public function index()
    {
        $data['title'] = 'Website';
        $data['page'] = 'pages/contekan/website/index';
        return $this->view($data);
    }
}
