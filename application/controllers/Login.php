<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	// Index login
	public function index() {
		// Fungsi Login
		$valid = $this->form_validation;
		$id_admin = $this->input->post('id_admin');
		$pass = $this->input->post('pass');
		$valid->set_rules('id_admin','id_admin','required');
		$valid->set_rules('pass','Password','required');
		if($valid->run()) {
			$this->simple_login1->login($id_admin,$pass, base_url('C_Siswa'), base_url('login'));
		}
		// End fungsi login
		$data = array(	'title'	=> 'Halaman Login Administrator');
		$this->load->view('login/login_view',$data);
	}
	
	// Logout di sini
	public function logout() {
		$this->simple_login1->logout();	
	}	
}