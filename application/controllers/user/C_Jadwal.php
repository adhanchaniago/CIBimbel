<?php 

    class C_Jadwal extends CI_Controller {
        public function index() {   
            $this->load->model('M_Jadwal');
            $data['jadwal']=$this->M_Jadwal->get_join();
            $this->load->view('layouts/user/header');
            $this->load->view('layouts/user/navbar');
            $this->load->view('user/jadwal',$data);
            $this->load->view('layouts/user/footer');
        }

    
    
        public function pdf(){
            $this->load->library('dompdf_gen');
            $data['jadwal']=$this->M_Jadwal->get_join();
            $this->load->view('jadwal/laporan_pdf',$data);

            $paper_size = 'A4';
            $orientation = 'landscape';
            $html = $this->output->get_output();
            $this->dompdf->set_paper($paper_size, $orientation);

            $this->dompdf->load_html($html);
            $this->dompdf->render();
            $this->dompdf->stream("Jadwal Bimbel Semua  Kelas .pdf",array('Attachment'=>0)); 
        }
    }
    

?>