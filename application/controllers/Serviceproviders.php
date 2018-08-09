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

	public function getcourses()
	{   
		$course_id=$this->input->get('course_id');
		$data['data']  = $this->b->list_course_providers($course_id);
		$dataS  = $this->b->list_course_providers($course_id);
		if($dataS){
		$this->load->view('header');
		$this->load->view('list_course_providers',$data);
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

	public function courseprovider_details(){
		$cp_id=$this->input->get('cp_id');
		$data['data']  = $this->b->courseprovider_details($cp_id);
		$this->load->view('header');
		$this->load->view('course_provider_details',$data);
		$this->load->view('footer');
	}

	public function get_timeslot(){
		
		//echo "<script>alert('hi')</script>";
		$value=$this->input->post('date');
		echo "<script>alert($value);</script>";
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
	 }

}
?>