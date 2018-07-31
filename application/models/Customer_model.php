<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Customer_model extends CI_Model {  
  
    function __construct()  
    {  
        //call model constructor  
        parent::__construct();
        $this->load->database();
    }     
          
    function registerCustomer($name, $email,$phone,$pwd)  
    {  
        $query = "insert into wvs_customer_details (customer_name,customer_email,password,
        customer_phone) values ('$name','$email'
        ,'$pwd','$phone')";
        $this->db->query($query);
    }   
    
    function loginValidate($email,$pwd){
        // $query = $this->db->get_where('wvs_customer_details', array('customer_email' => $email, 'password' => $password));
        // return $query->row_array();

        // $query = $this->db->query("select * from wvs_customer_details where 
        // customer_email='.$email.' and password='.$pwd.'");
        // // $this->db->query($query);
        // return $query->result_array();

        $query = $this->db->get_where('wvs_customer_details', array('customer_email' => $email, 'password' => $pwd));
        return $query->row_array();

    }

   function fetchName($email,$pwd){
    //    $query = $this->db->get_where('wvs_customer_details',array('customer_email' => $email, 'password' => $pwd));
    //    return $query->row_array();

       $query = $this->db->query("select customer_name from wvs_customer_details where customer_email=$email and password=$pwd ");
        return $query->result();
   }
}  
?>  