
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Wvs Schedular</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style_custom.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
  <link href="https://fonts.googleapis.com/css?family=Jura|Poppins" rel="stylesheet"> 
 
  <style>
 
 
  
 
   
  .nav-tabs li a {
      color: #777;
  }
  
  .navbar {
      font-family: 'Jura', sans-serif;
      margin-bottom: 0;
      background-color: #51627C;
      height:70px;
      border: 0;
      padding-top:10px;
      font-weight: bold;
      color:white;
      /* font-size: 15px !important; */
      letter-spacing: 4px;
      /* opacity: 0.9; */
      box-shadow:0 5px 11px 0 rgba(0,0,0,.18), 0 4px 15px 0 rgba(0,0,0,.15);
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
      
  }
  .navbar-nav li a:hover {
      color: #fff !important;
      border-bottom:2px solid #fff;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: none !important;
      border-bottom:2px solid #fff;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
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
      <a class="navbar-brand" href="#"><img src="assets/images/WVS-Logo.png" class="logo"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
         <li><a href="<?php echo base_url(); ?>" >HOME</a></li> 
         <li><a href="<?php echo base_url(); ?>index.php/customer/cust_register" >SIGN UP</a></li> 
        <li style="margin-left:-20px;margin-right:5px;"><a href="<?php echo base_url(); ?>index.php/customer/cust_login" >LOGIN</a></li>
    
        <li><?php echo $this->session->userdata('user'); ?></li> 
        
      </ul>
    </div>
  </div>
</nav>


