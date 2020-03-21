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

    public function if()
    {
        $data['title'] = 'IF syntak';
        $data['page'] = 'pages/contekan/website/if';
        return $this->view($data);
    }

    public function session_cookies()
    {
        $data['title'] = 'Session';
        $data['page'] = 'pages/contekan/website/session_cookies';
        return $this->view($data);
    }
}
