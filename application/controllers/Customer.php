<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
	public function __construct()
	{
	   parent::__construct();  
 
	   //calling model  

	   $this->load->model("Customer_model", "c");  
	}
    public function index()
	{   
        // $this->load->view('header');
		// $this->load->view('list_service_providers');
		// $this->load->view('footer');
	}
	public function cust_register()
	{   
		// $service_id=$this->input->get('service_id');
		// $data['data']  = $this->b->list_service_providers($service_id);
		$this->load->view('header');
		$this->load->view('customer_register');
		$this->load->view('footer');
	}
	public function cust_login(){
		$sp_id=$this->input->get('sp_id');
		$data['data']  = $this->b->serviceprovider_details($sp_id);
		$this->load->view('header');
		$this->load->view('service_provider_details',$data);
		$this->load->view('footer');

	}
}
?>