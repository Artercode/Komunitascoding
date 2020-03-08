<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Website extends MY_Controller
{
    public function index()
    {
        $data['title'] = 'Website';
        $data['page']  = 'pages/contekan/index';

        return $this->view($data);
    }
    //  ########## xampp #####################################################################
    public function xampp()
    {
        $data['title'] = 'Xampp';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_website');
        $this->load->view('website/xampp');
        $this->load->view('templates/footer_sd');
    }
    // ########## vscode #####################################################################
    public function vscode_instalasi()
    {
        $data['title'] = 'VScode_instalasi';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_website');
        $this->load->view('website/vscode_instalasi');
        $this->load->view('templates/footer_sd');
    }

    public function vscode_extensions()
    {
        $data['title'] = 'VScode_extensions';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_website');
        $this->load->view('website/vscode_extensions');
        $this->load->view('templates/footer_sd');
    }
    //  ########## html ######################################################################
    public function html_kerangkadasar()
    {
        $data['title'] = 'HTML';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_website');
        $this->load->view('website/html_kerangkadasar');
        $this->load->view('templates/footer_sd');
    }
    // ########## codeigniter ################################################################
    public function codeigniter_instalasi()
    {
        $data['title'] = 'Codeigniter_instalasi';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_website');
        $this->load->view('website/codeigniter_instalasi');
        $this->load->view('templates/footer_sd');
    }

    public function codeigniter_setting()
    {
        $data['title'] = 'Codeigniter_setting';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_website');
        $this->load->view('website/codeigniter_setting');
        $this->load->view('templates/footer_sd');
    }
    // ########## bootstrap ##################################################################
    public function bootstrap_instalasi()
    {
        $data['title'] = 'Bootstrap_instalasi';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_website');
        $this->load->view('website/bootstrap_instalasi');
        $this->load->view('templates/footer_sd');
    }

    public function bootstrap_setting()
    {
        $data['title'] = 'Bootstrap_instalasi';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_website');
        $this->load->view('website/bootstrap_setting');
        $this->load->view('templates/footer_sd');
    }
    //  ########## web sistim ################################################################
    public function websistim_responsive()
    {
        $data['title'] = 'Web Responsive';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_website');
        $this->load->view('website/websistim_responsive');
        $this->load->view('templates/footer_sd');
    }
    public function websistim_templatedinamis()
    {
        $data['title'] = 'Template Dinamis';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_website');
        $this->load->view('website/websistim_templatedinamis');
        $this->load->view('templates/footer_sd');
    }
    public function websistim_mvc()
    {
        $data['title'] = 'MVC';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_website');
        $this->load->view('website/websistim_mvc');
        $this->load->view('templates/footer_sd');
    }
    public function websistim_crud()
    {
        $data['title'] = 'CRUD';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_website');
        $this->load->view('website/websistim_crud');
        $this->load->view('templates/footer_sd');
    }
}
