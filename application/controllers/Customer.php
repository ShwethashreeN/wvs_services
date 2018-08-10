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
		if ($this->input->post('signup')){
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$pwd = $this->input->post('pwd');
			
			$this->c->registerCustomer($name, $email,$phone,$pwd);
			redirect("Customer/cust_login");
		}

	}
	public function cust_login(){
		$loginName='';
		$this->load->view('header');
		$this->load->view('customer_login');
		$this->load->view('footer');
		if ($this->input->post('login')){
			$email = $this->input->post('email');
			$pwd = $this->input->post('pwd');

			$data['data'] = $this->c->loginValidate($email,$pwd);
			$dataT = $this->c->loginValidate($email,$pwd);
			 foreach($data as $key => $value){ 
				$loginName= $value['customer_name'];
				$customer_id= $value['customer_id'];
			   } 
			if(($dataT)){
			   $this->session->set_userdata(array('user'=>$loginName,'user1'=>$customer_id));  

				header('location:' . base_url() .'index.php/payment');
				//redirect($_SERVER['HTTP_REFERER']);

				//header('location:javascript://history.go(-1)');

				
				
				
			}else{
			header('location:' . base_url() .'index.php/customer/cust_login');
            $this->session->set_flashdata('error', 'Invalid login. User not found');
			}
		}
	}
	public function cust_logout()  
    {  
        $this->session->sess_destroy();  
		header('location:' . base_url() );
    } 
}
?>