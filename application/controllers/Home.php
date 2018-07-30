<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
	   parent::__construct();  
 
	   //calling model  

	   $this->load->model("Homemodel", "a");  
	   //$this->load->model("Serviceproviders", "b");  
	}
    public function index()
	{   
        $this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function getservices()
	{ 
		$service_id=$this->input->get('service_id');
            
		$data['data']= $this->a->list_service_providers($service_id);
		$this->load->view('header');
		$this->load->view('list_service_providers',$data);
		$this->load->view('footer');
	}

}
?>