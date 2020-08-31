<?php 

class C_Siswa extends CI_Controller {

    public function index() {   
        $this->load->model('M_Siswa');
        $data['siswa']=$this->M_Siswa->get_join();
        $data['pass'] = $this->M_Siswa->generateRandString();
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('siswa/V_List',$data);
        $this->load->view('layouts/footer');
    }

    public function insert_entry(){
        $nama_siswa           = $this->input->post('nama_siswa');
        $email                = $this->input->post('email'      );
        $pass                 = $this->input->post('pass'      );
        $id_kelas                = $this->input->post('id_kelas');
        $no_hp                = $this->input->post('no_hp');
        $alamat               = $this->input->post('alamat');
        

        $data = array(

            'nama_siswa'    => $nama_siswa,
            'email'         => $email,
            'pass'          => $pass,
            'id_kelas'         => $id_kelas,
            'no_hp'         => $no_hp,
            'alamat'         => $alamat
        );

        $this->M_Siswa->insert_entry($data);
        redirect('C_Siswa/index');
    }

    public function delete_entry($id_siswa){
        $where = array('id_siswa'=>$id_siswa);
        $this->M_Siswa->delete_entry($where,'siswa');
        redirect('C_Siswa/index');
    }

    public function edit($id_siswa){

        $where = array('id_siswa'=>$id_siswa);
        $data['siswa'] = $this->M_Siswa->edit_data($where,'siswa')->result();
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('siswa/edit',$data);
        $this->load->view('layouts/footer');
    }

    public function update(){
        
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
            'id_kelas'         => $id_kelas,
            'no_hp'         => $no_hp,
            'alamat'        => $alamat
        );

        $where = array (
            'id_siswa' =>$id_siswa
        );

        $this->M_Siswa->update_data($where,$data,'siswa'); 
        redirect('C_Siswa/index');
    }




    
}

?>