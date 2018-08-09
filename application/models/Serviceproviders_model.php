<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Serviceproviders_model extends CI_Model {  
  
    function __construct()  
    {  
        //call model constructor  
        parent::__construct();  
    }     
          
        function list_service_providers($service_id)  
        {  
            // $query = $this->db->get('wvs_service_providers');  
            // return $query->result();  
            $this->db->where('service_id', $service_id);
            $query=$this->db->get('wvs_service_providers');
            return $query->result();
        }  
        
        function serviceprovider_details($sp_id)
        {
            //$this->db->where('sp_id', $sp_id);
            $query=$this->db->query("SELECT * from wvs_service_providers_details spd join wvs_service_providers sp on spd.sp_id=sp.sp_id where spd.sp_id='$sp_id'  ");
            return $query->result(); 
        }

        function list_course_providers($course_id)  
        {  
            // $query = $this->db->get('wvs_service_providers');  
            // return $query->result();  
            $this->db->where('course_id', $course_id);
            $query=$this->db->get('wvs_course_providers');
            return $query->result();
        }  

        function courseprovider_details($cp_id)
        {
            // $this->db->where('cp_id', $cp_id);
            $query = $this->db->query("SELECT * from wvs_course_providers_details cpd join wvs_course_providers cp on cpd.cp_id=cp.cp_id where cpd.cp_id='$cp_id'  ");
            return $query->result(); 
        }
        public function get_timeslot($value){

            $query = $this->db->query("SELECT time_id,slot_time FROM wvs_service_slot_date_details sdd join wvs_service_slot_time_details std on sdd.slot_id=std.slot_id WHERE slot_date=
                $value");
    
    
            return $query->result();
    
    
        }
       
}  
?>  