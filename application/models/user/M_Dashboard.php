<?php 
class M_Dashboard extends CI_Model {
    
    public function get_data() 
    {
        return $this->db->get('memo')->result_array();
    }

}
?>