<?php

class M_Memo extends CI_Model {
    
    public function get_data() 
    {
        return $this->db->get('memo')->result_array();
    }


    public function get_kelas()
    {
            $query = $this->db->get('memo');
            return $query;
    }

    public function insert_entry($data){
        $this->db->insert('memo', $data);
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