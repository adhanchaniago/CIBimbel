<?php

class M_Jadwal extends CI_Model {
    
    public function get_data() 
    {
        return $this->db->get('jadwal')->result_array();
    }

    public function get_join(){
        $this->db->select('*');
        $this->db->from('jadwal');
        $this->db->join('kelas','kelas.id_kelas = jadwal.id_kelas','LEFT');
        $this->db->join('pelajaran','pelajaran.id_pelajaran = jadwal.id_pelajaran','LEFT');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_join2(){
        $this->db->select('*');
        $this->db->from('jadwal');
        $this->db->join('pelajaran','pelajaran.id_pelajaran = jadwal.id_pelajaran');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_kelas()
    {
            $query = $this->db->get('kelas');
            return $query;
    }

    public function get_pelajaran()
    {
            $query = $this->db->get('pelajaran');
            return $query;
    }


    

    public function insert_entry($data){
        $this->db->insert('jadwal', $data);
    }

    public function delete_entry($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }


}
?>