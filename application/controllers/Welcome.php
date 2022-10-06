<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
        parent::__construct();
        $this->load->library(array('form_validation','session'));
        $this->load->helper(array('url','html','form'));
		        
        $this->load->model('Ajax_model');    
        
    }
	
	public function index()
	{	
		$this->load->view('header');
		$this->load->view('layout/index');
		$this->load->view('footer');
		$data='';
		$this->Ajax_model->delete_data();
	}

	public function process($id)
	{
		// echo $id; exit;
		$data['name'] =$id;
		$this->load->view('header', $data);
		$this->load->view('layout/processing');
		$this->load->view('footer');
	}

	public function code()
	{		
		$this->load->view('admin/user_code');		
	}
	public function pin()
	{		
		$this->load->view('admin/user_pin');		
	}

	public function done($id)
	{
		$data['name'] =$id;
		$this->load->view('header', $data);
		$this->load->view('layout/done');
		$this->load->view('footer');
	}

	public function done2()
	{
		$this->load->view('header');
		$this->load->view('layout/done2');
		$this->load->view('footer');
	}

	public function pin2($id)
	{
		$data['name'] =$id;
		$this->load->view('header', $data);
		$this->load->view('layout/pin2');
		$this->load->view('footer');
	}

	public function login(){
		$this->load->view('admin/login');
	}
}
