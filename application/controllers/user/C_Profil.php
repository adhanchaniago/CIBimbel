<?php 

    class C_Profil extends CI_Controller {
        public function index() {   
            $this->load->model(array('user/M_Profil'));

        }

        public function get_data($id_siswa){
            $this->load->model(array('user/M_Profil'));
            $where = array('id_siswa'=>$id_siswa);
            $data['profil'] = $this->M_Profil->get_join($where,'siswa')->result();
            $this->load->view('layouts/user/header');
            $this->load->view('layouts/user/navbar');
            $this->load->view('user/profil',$data);
            $this->load->view('layouts/user/footer');
        }

        public function edit($id_siswa){
            $this->load->model(array('user/M_Profil'));

            $where = array('id_siswa'=>$id_siswa);
            $data['profil'] = $this->M_Profil->get_join($where,'siswa')->result();
            $this->load->view('layouts/user/header');
            $this->load->view('layouts/user/navbar');
            $this->load->view('user/edit_profil',$data);
            $this->load->view('layouts/user/footer');
        }

        public function update(){
            $this->load->model(array('user/M_Profil'));

            $id_siswa             = $this->input->post('id_siswa');
            $nama_siswa           = $this->input->post('nama_siswa');
            $email                = $this->input->post('email');
            $pass                 = $this->input->post('pass');
            $id_kelas                = $this->input->post('id_kelas');
            $no_hp                = $this->input->post('no_hp');
            $alamat               = $this->input->post('alamat');
    
    
            $data = array(
    
                'nama_siswa'    => $nama_siswa,
                'email'         => $email,
                'pass'          => $pass,
                'id_kelas'      => $id_kelas,
                'no_hp'         => $no_hp,
                'alamat'        => $alamat
            );
    
            $where = array (
                'id_siswa' =>$id_siswa
            );
    
            $this->M_Profil->update_data($where,$data,'siswa'); 
            redirect('user/C_Profil/get_data/'.$this->session->userdata('id'));
        }
    


    }
    

?>