
<!DOCTYPE html>
<html lang="en">
<head>
<title>Wvs Schedular</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style_custom.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
  <link href="https://fonts.googleapis.com/css?family=Palanquin|Quicksand" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css"   />   -->
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  
 <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
 <style>
body{
    font-family: 'Quicksand', sans-serif;
    font-size:15px;
}
h1,h2,h3,h4,h5,h6{
    font-family: 'Palanquin', sans-serif;
}
h1,h2{
    color:#515F7C;
    font-weight:bold;
}
  .nav-tabs li a {
      color: #777;
  }
  
  .navbar {
      font-family: 'Palanquin', sans-serif;
      margin-bottom: 0;
      background-color: #51627C;
      height:70px;
      border: none;
      padding-top:10px;
      color:white;
      letter-spacing: 4px;
      box-shadow:0 5px 11px 0 rgba(0,0,0,.18), 0 4px 15px 0 rgba(0,0,0,.15);
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
      
  }
  .navbar-nav li a:hover {
      color: #fff !important;
      text-shadow: 2px 2px 2px #000000;
}
      /* border-bottom:5px solid #fff; */
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: none !important;
      /* border-bottom:2px solid #fff; */
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
 
  .btn-default{
  background-color:brown !important;
  color:white !important;
  width:100%;
  box-shadow:0px 5px 5px 0px #888888;
}
.btn{
  border-color:transparent !important;
  border-radius:0px !important;
  line-height:1.9 !important;
}
  textarea {
      resize: none;
  }
  .logo{
    margin-top:-44px;
  }
  </style>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" style="overflow-x:hidden;">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="/wvs_services/assets/images/WVS-Logo.png" class="logo"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right" style="padding-right:20px;">
         <li><a href="<?php echo base_url(); ?>" >HOME</a></li> 
         <li><a href="<?php echo base_url(); ?>" >CONTACT</a></li> 
        
         <!-- <li><a href="<?php echo base_url(); ?>index.php/customer/cust_register" >SIGN UP</a></li> 
        <li style="margin-left:-20px;margin-right:5px;"><a href="<?php echo base_url(); ?>index.php/customer/cust_login" >LOGIN</a></li>
        
        <li><?php echo $this->session->userdata('user') ;  ?></li> -->

        <?php 
               $logindata = $this->session->userdata('user');
               $login_id = $this->session->userdata('user1');

                  if(isset($logindata)){   
                       echo "<li>$logindata , <a href='http://localhost/wvs_services/index.php/customer/cust_logout'>logout</a></li>";
                      
                    }
                else {   
                    //  echo' <li><a href="http://localhost/wvs_services/index.php/customer/cust_register" >SIGNUP</a></li> ';   
                     echo' <li Style="border:1px solid #fff;border-radius:8px;margin-top:5px;box shadow:5px 10px #dddddd;"><a style="line-height:10px;" href="http://localhost/wvs_services/index.php/customer/cust_login" >SIGNUP / LOGIN</a></li>';
                    }       
          ?>
      </ul>
    </div>
  </div>
</nav>


