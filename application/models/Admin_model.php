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
    public function count(){
        return $this->db->count_all("details");
    }

    public function get_details($limit, $start){
        $this->db->limit($limit, $start);
        $query = $this->db->get('details');

        return $query->result();
    }
}