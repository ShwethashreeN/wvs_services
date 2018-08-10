<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Serviceproviders extends CI_Controller {
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
		// $service_id=$this->input->get('service_id');
		// $data['data']  = $this->b->list_service_providers($service_id);
		// $dataS  = $this->b->list_service_providers($service_id);
		// if($dataS){
		// $this->load->view('header');
		// $this->load->view('list_service_providers',$data);
		// $this->load->view('footer');
		// }
		// else{
		// 	header('location:' . base_url() );
        //     // $this->set_flashdata('error', 'No service providers found');
		// }

			//demo

		$service_name=$this->input->get('service_name');
		$data['data']  = $this->b->list_service_providers($service_name);
		$dataS  = $this->b->list_service_providers($service_name);
		if($dataS)
		{
		$this->load->view('header');
		$this->load->view('list_service_providers',$data);
		$this->load->view('footer');
		}
		else
		{
			header('location:' . base_url() );
            // $this->set_flashdata('error', 'No service providers found');
		}

	}

	// public function getcourses()
	// {   
	// 	$course_id=$this->input->get('course_id');
	// 	$data['data']  = $this->b->list_course_providers($course_id);
	// 	$dataS  = $this->b->list_course_providers($course_id);
	// 	if($dataS){
	// 	$this->load->view('header');
	// 	$this->load->view('list_course_providers',$data);
	// 	$this->load->view('footer');
	// 	}
	// 	else{
	// 		header('location:' . base_url() );
    //         // $this->set_flashdata('error', 'No service providers found');
	// 	}
	// }




	public function serviceprovider_details(){
		// $sp_id=$this->input->get('sp_id');
		// $data['data']  = $this->b->serviceprovider_details($sp_id);
		// $dataD  = $this->b->serviceprovider_details($sp_id);
		// if($dataD){
		// $this->load->view('header');
		// $this->load->view('service_provider_details',$data);
		// $this->load->view('footer');
		// }
		// else{
		// 	header('location:' . base_url() );
		// }

		//demo
		$service_id=$this->input->get('service_id');
		$data['data']  = $this->b->serviceprovider_details($service_id);
		$dataD  = $this->b->serviceprovider_details($service_id);
		if($dataD){
		$this->load->view('header');
		$this->load->view('service_provider_details',$data);
		$this->load->view('footer');
		}
		else{
			header('location:' . base_url() );
		}
		

	}

	// public function courseprovider_details(){
	// 	$cp_id=$this->input->get('cp_id');
	// 	$data['data']  = $this->b->courseprovider_details($cp_id);
	// 	$dataC  = $this->b->courseprovider_details($cp_id);
	// 	if($dataC){
	// 	$this->load->view('header');
	// 	$this->load->view('course_provider_details',$data);
	// 	$this->load->view('footer');
	// 	}
	// 	else{
	// 		header('location:' . base_url() );
	// 	}
	// }

	public function get_timeslot(){
		
		//echo "<script>alert('hi')</script>";
		//$value=$this->input->post('date');
		echo "<script>alert(date);</script>";
	// 	$value=$this->input->post('value');
	// 	$timeslot=$this->b->get_timeslot($value);
	// 	if(count($timeslot)>0)
	// 	{
	  
	// 	  $pro_select_box='';
	// 	  $pro_select_box.='<option value="">Select Timeslot</option>';
	  
	// 	  foreach ($timeslot as $time) {
	// 		$pro_select_box.='<option value="'.$time->time_id.'">'.$time->slot_time.'</option>';
			
	// 	  }
	// 	  echo json_encode($pro_select_box);
	  
	// 	}

	//demo

	$value=$this->input->post('value');
	$time_id=$this->b->get_timeslot_new($value);
	if(count($time_id)>0)
	{
  
	  $pro_select_box='';
	  $pro_select_box.='<option value="">Select time</option>';
  
	  foreach ($time_id as $seller) {
		$pro_select_box.='<option value="'.$seller->slot_id.'">'.$seller->service_id.'</option>';
		
	  }
	  echo json_encode($pro_select_box);
  
	}
	 }

}
?>