<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Website extends MY_Controller
{
	public function index()
	{
		$data['title'] = 'Website';
		$data['page'] = 'pages/website/index';
		return $this->view($data);
	}

	public function if()
	{
		$data['title'] = 'IF syntak';
		$data['page'] = 'pages/website/gadogado/if';
		return $this->view($data);
	}

	public function responsive()
	{
		$data['title'] = 'Responsive';
		$data['page'] = 'pages/website/gadogado/responsive';
		return $this->view($data);
	}

	public function template_dinamis()
	{
		$data['title'] = 'Template Dinamis';
		$data['page'] = 'pages/website/gadogado/template_dinamis';
		return $this->view($data);
	}

	public function session_cookies()
	{
		$data['title'] = 'Session';
		$data['page'] = 'pages/website/gadogado/session_cookies';
		return $this->view($data);
	}
}
