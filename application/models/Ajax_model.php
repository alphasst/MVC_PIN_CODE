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
    public function get_data(){
       
        $response = $this->db->get('ajax'); 
        return $response->result();
    }

    public function delete_data(){
        $this->db->where('no', 0);
        $this->db->delete('ajax');
    }
    
}