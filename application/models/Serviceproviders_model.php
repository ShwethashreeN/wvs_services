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
            $this->db->where('sp_id', $sp_id);
            $query=$this->db->get('wvs_service_providers_details');
            return $query->result(); 
        }

        function list_course_providers()  
        {  
            $query = $this->db->get('wvs_course_providers');  
            return $query->result();  
        }  
       
}  
?>  