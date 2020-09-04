<?php if(! defined('BASEPATH')) exit('Akses langsung tidak diperbolehkan'); 

class Simple_login {
	// SET SUPER GLOBAL
	var $CI = NULL;
	public function __construct() {
		$this->CI =& get_instance();
	}
	// Fungsi login
	public function login($email, $pass) {
		$query = $this->CI->db->get_where('siswa',array('email'=>$email,'pass' => $pass));
		if($query->num_rows() == 1) {
			$row 	= $this->CI->db->query('SELECT id_siswa FROM siswa where email = "'.$email.'"');
			$admin 	= $row->row();
			$id 	= $admin->id_siswa;
			$this->CI->session->set_userdata('email', $email);
			$this->CI->session->set_userdata('id_login', uniqid(rand()));
			$this->CI->session->set_userdata('id', $id);
			redirect(base_url('user/Dashboard'));
		}else{
			$this->CI->session->set_flashdata('sukses','Oops... Username/pass salah');
			redirect(base_url('user/login'));
		}
		return false;
	}
	// Proteksi halaman
	public function cek_login() {
		if($this->CI->session->userdata('email') == '') {
			$this->CI->session->set_flashdata('sukses','Anda belum login');
			redirect(base_url('user/login'));
		}
	}
	// Fungsi logout
	public function logout() {
		$this->CI->session->unset_userdata('email');
		$this->CI->session->unset_userdata('id_login');
		$this->CI->session->unset_userdata('id');
		$this->CI->session->set_flashdata('sukses','Anda berhasil logout');
		redirect(base_url('user/login'));
	}
}