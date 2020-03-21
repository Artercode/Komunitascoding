<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Selamat_Datang extends MY_Controller
{
	public function index()
	{
		$data['title']  = 'Komunitas codinG';
		$data['page']   = 'pages/selamat_datang/index';

		return $this->view($data);
	}

	public function note()
	{
		$data['title'] = 'Note';
		$data['page']  = 'pages/selamat_datang/note';

		return $this->view($data);
	}

	public function camp()
	{
		$data['title'] = 'Camp Kediri';
		$data['page']  = 'pages/selamat_datang/camp';

		return $this->view($data);
	}

	public function sekedar_tau()
	{
		$data['title'] = 'Sekedar Tau';
		$data['page']  = 'pages/selamat_datang/sekedar_tau';

		return $this->view($data);
	}
}

/* End of file Controllername.php */
