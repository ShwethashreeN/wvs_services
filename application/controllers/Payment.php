<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {
	public function __construct()
	{
	   parent::__construct();  
 
	   //calling model  

	   //$this->load->model("Payment_model", "p");  
	}
    public function index()
	{   
        $this->load->view('header');
		$this->load->view('payment');
		$this->load->view('footer');
	}
	
}
?>