<?php

defined('BASEPATH') or exit('No direct script access allowed');
// Register_model merupakan turunan dari MY_Model
class Register_model extends MY_Model
{
	protected $table = 'user';

	public function getDefaultValues()
	{
		return [
			'name'      	=> '',
			'alamat'    	=> '',
			'kota'      	=> '',
			'provinsi'  	=> '',
			'handphone' 	=> '',
			'email'     	=> '',
			'password'  	=> '',
			'github'    	=> '',
			'role_id'   	=> '',
			'ia_active' 	=> '',
			'date_created' => ''
		];
	}

	public function validate()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters(
			'<small class="form-text text-danger">',
			'</small>'
		);
		$this->form_validation->set_rules('name', 'Nama', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('password_confirmation', 'Konfimasi Password', 'trim|required|matches[password]');

		return $this->form_validation->run();
	}

	public function run($input)
	{
		$data = [
			'name'      	=> $input->name,
			'email'     	=> strtolower($input->email),
			'password'  	=> hashEncrypt($input->password),
			'role_id'   	=> '1',
			'is_active' 	=> '1',
			'date_created' => time()
		];

		$user       = $this->create($data);

		$sess_data  = [
			'id'        => $user,
			'name'      => $data['name'],
			'email'     => $data['email'],
			'role_id'	=> $data['role_id'],
			'is_login'  => true
		];

		$this->session->set_userdata($sess_data);
		return true;
	}
}

/* End of file Register_model.php */
