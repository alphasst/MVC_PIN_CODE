<?php
class Detail_model extends CI_Model {
  
    public function __construct()
    {
        $this->load->database();
    }
     
    public function insert($data)
    {
        $insert = $this->db->insert('visiter', $data);
        return $insert;
    }    
    
}