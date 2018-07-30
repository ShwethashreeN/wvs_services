<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Homemodel extends CI_Model {  
  
    function __construct()  
    {  
        //call model constructor  
        parent::__construct();  
    }     
          
        function fetchservices()  
        {  
            $query = $this->db->get('wvs_services');  
            return $query->result();  
        }  
        function fetchcourses()  
        {  
            $query = $this->db->get('wvs_courses');  
            return $query->result();  
        }  

        function list_service_providers()  
        {  
            // $query = $this->db->get('wvs_service_providers');  
            // return $query->result();  
            $this->db->where('service_id', $service_id);
            $query=$this->db->get('wvs_service_providers');
            return $query->result();
        }  

       
}  
?>  