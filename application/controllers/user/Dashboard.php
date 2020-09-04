<?php 

    class Dashboard extends CI_Controller {
    
    
        public function index() {
            $this->simple_login->cek_login();
            $this->load->model('user/M_Dashboard');
            $data['memo']=$this->M_Dashboard->get_data();
            $this->load->view('layouts/user/header');
            $this->load->view('layouts/user/navbar');
            $this->load->view('user/dashboard', $data);
            $this->load->view('layouts/user/footer');
        }
    }
?>