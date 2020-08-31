<?php

class M_Siswa extends CI_Model {
    
    public function get_data() 
    {
        return $this->db->get('siswa')->result_array();
    }

    public function get_join(){
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas','kelas.id_kelas = siswa.id_kelas');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_kelas()
    {
            $query = $this->db->get('kelas');
            return $query;
    }


    public function get_siswa()
    {
            $query = $this->db->get('siswa');
            return $query;
    }

    public function insert_entry($data){
        $this->db->insert('siswa', $data);
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

    public function generateRandString ($length = 10){
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',ceil($length/strlen($x)))),1,$length);
    }



}
?>