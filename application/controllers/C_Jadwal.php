<?php 

    class C_Jadwal extends CI_Controller {
        public function index() {   
            $this->load->model('M_Jadwal');
            $data['jadwal']=$this->M_Jadwal->get_join();
            $this->load->view('layouts/header');
            $this->load->view('layouts/navbar');
            $this->load->view('layouts/sidebar');
            $this->load->view('jadwal/V_List',$data);
            $this->load->view('layouts/footer');
        }

        public function insert_entry(){
            $id_kelas                = $this->input->post('id_kelas');
            $id_pelajaran            = $this->input->post('id_pelajaran'  );
            $hari                    = $this->input->post('hari'      );
            $jam_mulai               = $this->input->post('jam_mulai');
            $jam_sls                 = $this->input->post('jam_sls');
            
    
            $data = array(
    
                'id_kelas'    => $id_kelas,
                'id_pelajaran'         => $id_pelajaran,
                'hari'          => $hari,
                'jam_mulai'         => $jam_mulai,
                'jam_sls'         => $jam_sls
            );
    
            $this->M_Jadwal->insert_entry($data);
            redirect('C_Jadwal/index');
        }

        public function delete_entry($id_jadwal){
            $where = array('id_jadwal'=>$id_jadwal);
            $this->M_Jadwal->delete_entry($where,'jadwal');
            redirect('C_Jadwal/index');
        }

        public function edit($id_jadwal){

            $where = array('id_jadwal'=>$id_jadwal);
            $data['jadwal'] = $this->M_Jadwal->edit_data($where,'jadwal')->result();
            $this->load->view('layouts/header');
            $this->load->view('layouts/navbar');
            $this->load->view('layouts/sidebar');
            $this->load->view('jadwal/edit',$data);
            $this->load->view('layouts/footer');
        }

        public function update(){
        
            $id_jadwal                   = $this->input->post('id_jadwal');
            $id_kelas                = $this->input->post('id_kelas');
            $id_pelajaran            = $this->input->post('id_pelajaran'  );
            $hari                    = $this->input->post('hari'      );
            $jam_mulai               = $this->input->post('jam_mulai');
            $jam_sls                 = $this->input->post('jam_sls');
    
    
            $data = array(
    
                'id_jadwal'             => $id_jadwal,
                'id_kelas'    => $id_kelas,
                'id_pelajaran'         => $id_pelajaran,
                'hari'          => $hari,
                'jam_mulai'         => $jam_mulai,
                'jam_sls'         => $jam_sls
            );
    
            $where = array (
                'id_jadwal' =>$id_jadwal
            );
    
            $this->M_Jadwal->update_data($where,$data,'jadwal'); 
            redirect('C_Jadwal/index');
        }
    
    
    
    
    }
    

?>