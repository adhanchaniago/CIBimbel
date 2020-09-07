<?php 

    class C_Kontak extends CI_Controller {
        public function index() {   
            $this->load->view('layouts/user/header');
            $this->load->view('layouts/user/navbar');
            $this->load->view('user/kontak');
            $this->load->view('layouts/user/footer');

        }
    

    }
    

?>