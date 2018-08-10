<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Serviceproviders_model extends CI_Model {  
  
    function __construct()  
    {  
        //call model constructor  
        parent::__construct();  
    }     
          
        function list_service_providers($service_name)  
        {  
            // $query = $this->db->get('wvs_service_providers');  
            // return $query->result();  
            // $this->db->where('service_id', $service_id);
            // $query=$this->db->get('wvs_service_providers');
            // return $query->result();

            //demo
            $this->db->where('booking_type', $service_name);
            $query=$this->db->get('wvs_service_details');
            return $query->result();

        }  
        
        function serviceprovider_details($service_id)
        {
            
            // $query=$this->db->query("SELECT * from wvs_service_providers_details spd join wvs_service_providers sp on spd.sp_id=sp.sp_id where spd.sp_id='$sp_id'  ");
            // return $query->result(); 

            //demo
            $this->db->where('service_id', $service_id);
            $query=$this->db->get('wvs_service_details');
            return $query->result();


        }

        function getSlotDetails($service_id,$selectedDate){
            $queryValidateDate = $this->db->query("select st.time_id,st.slot_time 
            from wvs_service_slot_time_details st 
            JOIN wvs_service_slot_date_details sd 
            ON sd.slot_id=st.slot_id where sd.service_id='" . $service_id ."'
             and sd.slot_date='" . $selectedDate ."'");
    
             return $queryValidateDate->result();
        }

        // function list_course_providers($course_id)  
        // {  
        //     // $query = $this->db->get('wvs_service_providers');  
        //     // return $query->result();  
        //     $this->db->where('course_id', $course_id);
        //     $query=$this->db->get('wvs_course_providers');
        //     return $query->result();
        // }  

        // function courseprovider_details($cp_id)
        // {
        //     // $this->db->where('cp_id', $cp_id);
        //     $query = $this->db->query("SELECT * from wvs_course_providers_details cpd join wvs_course_providers cp on cpd.cp_id=cp.cp_id where cpd.cp_id='$cp_id'  ");
        //     return $query->result(); 
        // }
        // public function get_timeslot($value){

        //     $query = $this->db->query("SELECT time_id,slot_time FROM wvs_service_slot_date_details sdd join wvs_service_slot_time_details std on sdd.slot_id=std.slot_id WHERE slot_date=
        //         $value");
    
    
        //     return $query->result();
    
    
        // }
       
}  
?>  