<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Customer_model extends CI_Model {  
  
    function __construct()  
    {  
        //call model constructor  
        parent::__construct();  
    }     
          

        function cust_register()  
        {  
            $query = $this->db->get('wvs_course_providers');  
            return $query->result();  
        }  
       
}  
?>  