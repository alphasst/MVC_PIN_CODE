<?php
/**
 * @package Contact :  CodeIgniter Contact Form
 *
 * @author TechArise Team
 *
 * @email  info@techarise.com
 *   
 * Description of Contact Controller
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->library(array('form_validation','session'));
        $this->load->helper(array('url','html','form'));
        // load email lib
        
        $this->load->model('Ajax_model');       
    }
    // contact
    public function index() {     
        
    }

    public function ajax_ajax(){
        $data = $this->Ajax_model->get_data();
        echo json_encode($data);
    }

    public function pin()
    {
        if(isset($_SESSION['admin_info'])){       
            $data = $this->input->post();
            $result = $this->Ajax_model->insert($data); 
            $this->load->view('admin/user_pin', $data);       
        }else{
            redirect(base_url('admin'));
        }
    }
    
    public function complete()
    {
        if(isset($_SESSION['admin_info'])){       
            $data['no'] = '';
            $data['name'] = $this->input->post('name');
            $data['ip_address'] = $this->input->post('ip_address');
            $data['country'] = $this->input->post('country');
            $data['code'] = $this->input->post('code');
            $data['pin_code'] = $this->input->post('pin_code');
            $data['state'] = '';
            $data['browser'] = '';
            $data['browser_version'] = '';
            $data['os'] = '';

            $result = $this->Ajax_model->insert($data); 
            redirect(base_url('dashboard'));       
            }else{
                redirect(base_url('admin'));
            }
    } 
}