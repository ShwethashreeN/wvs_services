<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_summary extends CI_Controller {
	public function __construct()
	{
	   parent::__construct();  
 
	   //calling model  

	   $this->load->model("Ordersummary_model", "o");  
	}
    public function index()
	{   
        $this->load->view('header');
		$this->load->view('order_summary');
		$this->load->view('footer');
    }
    
}
?>