<?php 

class C_Memo extends CI_Controller {

    public function index() {   
        $this->load->model('M_Memo');
        $data['memo']=$this->M_Memo->get_data();
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('memo/V_Page',$data);
        $this->load->view('layouts/footer');
    }

    public function create(){
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('memo/V_Create');
        $this->load->view('layouts/footer');

    }

    public function insert_entry(){
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
        $tanggal = $this->input->post('tanggal');

        $data = array (
            'judul'     => $judul,
            'isi'     => $isi,
            'tanggal'     => $tanggal
        );

        $this->M_Memo->insert_entry($data);
        redirect('C_Memo/index');

    }

    public function delete_entry($id_memo){
        $where = array('id_memo'=>$id_memo);
        $this->M_Memo->delete_entry($where,'memo');
        redirect('C_Memo/index');
    }

    public function edit($id_memo){
        $where = array ('id_memo' => $id_memo);
        $data['memo'] = $this->M_Memo->edit_data($where, 'memo')->result();
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('memo/edit',$data);
        $this->load->view('layouts/footer');
    }


    public function update(){
        
        $id_memo                = $this->input->post('id_memo');
        $judul                  = $this->input->post('judul');
        $isi                    = $this->input->post('isi');
        $tanggal                = $this->input->post('tanggal');

        $data = array(

            'judul'    => $judul,
            'isi'         => $isi,
            'tanggal'          => $tanggal
        );

        $where = array (
            'id_memo' =>$id_memo
        );

        $this->M_Memo->update_data($where,$data,'memo'); 
        redirect('C_Memo/index');
    }



}

?>