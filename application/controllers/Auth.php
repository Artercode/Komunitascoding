<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MY_Controller
{
	// ########## login ######################################################################
	public function login()
	{
		if (!$_POST) {
			$input = (object) $this->auth->defaultValuesLogin();
		} else {
			$input = (object) $this->input->post(null, true);
		}
		// jika validasi gagal
		if (!$this->auth->validateLogin()) {
			$data['title'] = 'login';
			$data['input'] = $input;
			$data['page'] 	= 'pages/auth/login';
			return $this->view($data);
		}
		// jika validasi berhasil - alert untuk prosess login berhasil maka.. jika gagal..
		if ($this->auth->runLogin($input)) {
			$this->session->set_flashdata('success', 'Berhasil melakukan login!');
			redirect(base_url('menu'));
		} else {
			$this->session->set_flashdata('error', 'Email atau password salah atau Akun anda tidak aktif!');
			redirect(base_url('auth/login'));
		}
	}

	// ########## register ##################################################################
	public function register()
	{
		if (!$_POST) {
			$input  = (object) $this->auth->defaultValuesRegister();
		} else {
			$input  = (object) $this->input->post(null, true);
		}
		// jika validasi tidak ada akan diarahkan ke halaman registrasi
		if (!$this->auth->validateRegister()) {
			$data['title']  = 'Register';
			$data['input']  = $input;
			$data['page']   = 'pages/auth/register';
			$this->view($data);
			return;
		}
		// mejalankan proses register(create data)
		if ($this->auth->runRegister($input)) {
			$this->session->set_flashdata('success', 'Berhasil melakukan registrasi!');
			redirect(base_url('menu'));
		} else {
			$this->session->set_flashdata('error', 'Ooops! Terjadi kesalahan!');
			redirect(base_url('register'));
		}
	}

	// ########## logout #######################################################################
	public function logout()
	{
		// menentukan data session apa saja yang akan dihapus (sesuai key data di tabel user)
		$sess_data = ['id', 'name', 'email', 'role', 'is_login'];
		// proses hapus session login yang sudah tersimpan
		$this->session->unset_userdata('$sess_data');
		$this->session->sess_destroy();
		redirect(base_url('/'));
	}
}

/* End of file Login.php */
