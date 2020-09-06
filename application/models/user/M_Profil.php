<?php

class M_Profil extends CI_Model {
    
    public function get_join($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function get_kelas($where){
        
        $this->db->select('id_kelas');
        return $this->db->get_where('siswa',$where);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }



}




?>