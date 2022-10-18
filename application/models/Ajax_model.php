<?php
class Ajax_model extends CI_Model {
  
    public function __construct()
    {
        $this->load->database();
    }
     
    public function insert($data)
    {        
        $this->db->where('no', 0);
        $this->db->delete('ajax');
       
        $insert = $this->db->insert('ajax', $data);
        return $insert;
    }

    
}