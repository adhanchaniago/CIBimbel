<?php 

class C_Pelajaran extends CI_Controller {

    public function index() {   
        $this->load->model('M_Pelajaran');
        $data['pljr']=$this->M_Pelajaran->get_data();
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('pelajaran/V_List',$data);
        $this->load->view('layouts/footer');
    }

    public function insert_entry(){
        $nama_pelajaran           = $this->input->post('nama_pelajaran');
        $tingkat                  = $this->input->post('tingkat');
        

        $data = array(

            'nama_pelajaran'    => $nama_pelajaran,
            'tingkat'           => $tingkat
        );

        $this->M_Pelajaran->insert_entry($data);
        redirect('C_Pelajaran/index');
    }

    public function delete_entry($id_pelajaran){
        $where = array('id_pelajaran'=>$id_pelajaran);
        $this->M_Pelajaran->delete_entry($where,'pelajaran');
        redirect('C_Pelajaran/index');
    }

    public function edit($id_pelajaran){

        $where = array('id_pelajaran'=>$id_pelajaran);
        $data['pljr'] = $this->M_Pelajaran->edit_data($where,'pelajaran')->result();
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('pelajaran/edit',$data);
        $this->load->view('layouts/footer');
    }

    public function update(){
        
        $id_pelajaran                 = $this->input->post('id_pelajaran');
        $nama_pelajaran           = $this->input->post('nama_pelajaran');
        $tingkat                  = $this->input->post('tingkat');


        $data = array(

            'nama_pelajaran'    => $nama_pelajaran,
            'tingkat'           => $tingkat
        );

        $where = array (
            'id_pelajaran' =>$id_pelajaran
        );

        $this->M_Pelajaran->update_data($where,$data,'pelajaran'); 
        redirect('C_Pelajaran/index');
    }




    
}

?>