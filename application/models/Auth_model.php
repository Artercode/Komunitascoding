<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends MY_Model
{
	// menentukan tabel yang digunakan karena nama model tidak sama dengan nama tabel
	protected $table = 'user';

	// ########## login ######################################################################
	public function defaultValuesLogin()
	{
		return [
			'email'     => '',
			'password'  => '',
		];
	}

	public function validateLogin()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters(
			'<small class="form-text text-danger">',
			'</small>'
		);
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		return $this->form_validation->run();
	}

	public function runLogin($input)
	{
		// mencari email apa sudah terdaftar atau belum
		$query = $this->where('email', strtolower($input->email))
			->where('is_active', 1)
			->first();
		// jika email ada dalam database
		if (!empty($query) && hashEncryptVerify($input->password, $query->password)) {
			$sess_data = [
				'id'        => $query->id,
				'name'      => $query->name,
				'email'     => $query->email,
				'role'      => $query->role,
				'is_login'  => true,
			];
			$this->session->set_userdata($sess_data);
			return true;
		}
		return false;
	}

	// ########## register ###################################################################
	public function defaultValuesRegister()
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

	public function validateRegister()
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

	public function runRegidter($input)
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

/* End of file Login_model.php */
