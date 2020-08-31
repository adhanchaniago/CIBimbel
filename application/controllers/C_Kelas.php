<?php 

class C_Kelas extends CI_Controller {
    public function index(){
        $this->load->model('M_Kelas');
        $data['kelas']=$this->M_Kelas->get_data();
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('kelas/V_List',$data);
        $this->load->view('layouts/footer');
    }

    public function insert_entry(){
        $nama_kelas                = $this->input->post('nama_kelas');
        

        $data = array(

            'nama_kelas'         => $nama_kelas,
        );

        $this->M_Kelas->insert_entry($data);
        redirect('C_Kelas/index');
    }

    public function delete_entry($id_kelas){
        $where = array('id_kelas'=>$id_kelas);
        $this->M_Siswa->delete_entry($where,'kelas');
        redirect('C_Kelas/index');
    }

    public function edit($id_kelas){

        $where = array('id_kelas'=>$id_kelas);
        $data['kelas'] = $this->M_Kelas->edit_data($where,'kelas')->result();
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('kelas/edit',$data);
        $this->load->view('layouts/footer');
    }

    public function update(){
        
        $id_kelas           = $this->input->post('id_kelas');
        $nama_kelas                = $this->input->post('nama_kelas');


        $data = array(

            'id_kelas'    => $id_kelas,
            'nama_kelas'         => $nama_kelas,
        );

        $where = array (
            'id_kelas' =>$id_kelas
        );

        $this->M_Kelas->update_data($where,$data,'kelas'); 
        redirect('C_Kelas/index');
    }



}
?>