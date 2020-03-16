<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{

    public function index()
    {
        $data['title']  = 'Komunitas codinG';
        $data['page']   = 'pages/home/index';

        return $this->view($data);
    }
}

/* End of file Controllername.php */
