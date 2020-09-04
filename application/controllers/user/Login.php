<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	// Index login
	public function index() {
		// Fungsi Login
		$valid = $this->form_validation;
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');
		$valid->set_rules('email','Username','required');
		$valid->set_rules('pass','Password','required');
		if($valid->run()) {
			$this->simple_login->login($email,$pass, base_url('user/Dashboard'), base_url('user/login'));
		}
		// End fungsi login
		$data = array(	'title'	=> 'Halaman Login Administrator');
		$this->load->view('user/login_view',$data);
	}
	
	// Logout di sini
	public function logout() {
		$this->simple_login->logout();	
	}	
}