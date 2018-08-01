<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {
	public function __construct()
	{
	   parent::__construct();  
 
	   //calling model  

	   $this->load->model("Serviceproviders_model", "b");  
	}
    public function index()
	{   
        // $this->load->view('header');
		// $this->load->view('list_service_providers');
		// $this->load->view('footer');
	}
	public function getservices()
	{   
		$service_id=$this->input->get('service_id');
		$data['data']  = $this->b->list_service_providers($service_id);
		$dataS  = $this->b->list_service_providers($service_id);
		if($dataS){
		$this->load->view('header');
		$this->load->view('list_service_providers',$data);
		$this->load->view('footer');
		}
		else{
			header('location:' . base_url() );
            // $this->set_flashdata('error', 'No service providers found');
		}
	}
	public function serviceprovider_details(){
		$sp_id=$this->input->get('sp_id');
		$data['data']  = $this->b->serviceprovider_details($sp_id);
		$this->load->view('header');
		$this->load->view('service_provider_details',$data);
		$this->load->view('footer');

	}
}
?>