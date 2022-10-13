<?php
class Admin_model extends CI_Model {
  
    public function __construct()
    {
        $this->load->database();
    }
     
    public function login($data)
    {
        // $insert = $this->db->insert('details', $data);
        
        $query = $this->db->get_where('admin', $data);
        if($query){   
            return $query->row();
           }
           return false;
        
    }
    
}