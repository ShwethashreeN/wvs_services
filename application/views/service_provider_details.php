<style>
.container{
    margin-top:100px;
    /* margin-bottom:150px; */
}
#datep {
    display: none;
}

.ui-datepicker-calendar tbody td > a.hover-calendar-cell {
    border: 1px solid #074e91;
    /* background: #5bacf7 url(images/ui-bg_glass_15_5bacf7_1x400.png) 50% 50% repeat-x; */
    font-weight: normal;
    color: #1a1a1a;
}
#addon{background-color:#999; width:100%}
/* img{
    border-radius:50%;
} */
#profile_image{
  border-radius:50%;
}
#profile_image:hover{
    border:10px solid #f1f1f1;
    /* box-shadow:0px 5px 10px 0px #888888; */
}
.active{
    background-color:#515F7C !important;
    border-color:#515F7C !important;
}
.providers_display{
  width:100%;
  height:auto;
  box-shadow:0px 5px 10px 0px #888888;
  padding-top:50px;
  padding-bottom:50px;
}
.services_display{
  border-right:2px solid brown;
}
#time_slots{
  display:hidden;
}
input{
  border:none;
}
textarea{
  border:none;
}


/* The container */
.container1 {
    /* display: block; */
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.container1 input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container1:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container1 input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.container1 input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.container1 .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
</style>


<div class="container">
<h2> Service Provider Details</h2>
<hr class="line_hr"><br><br>


<?php 

$dt = new DateTime();       
  //echo $dt->format('Y-m-d');       
  $today = $dt->format('Y-m-d');
             foreach($data as $row)  
             {
                echo"
                <form method='post'>
                <div class='row' style='box-shadow:0px 5px 10px 0px #888888;margin-bottom:200px;padding:30px;'>
                  <div class='col-md-6'>
                    <img src=$row->service_avatar alt='no image' style='width:500px;'>
                    <input name='image'  type='text' readonly  />
                  </div>
                  <div class='col-md-6' >
                  <h3 style='color:brown;'> <input type='text' name='name' value='$row->service_name' readonly> </h3><br>
                          <textarea style='font-size:18px;width:100%;font-family:Palanquin ;' rows='4' cols='60' name='details'  value='$row->service_details ' readonly>$row->service_details</textarea> 
                            <label>Address</label>
                             <textarea rows='4' cols='50'  class='form-control' name='address' readonly> $row->service_address</textarea> <br>
                            
                             <p><b>Price / Cost </b> : <input type='text' name='cost'  value='$row->service_sub_details' readonly> </p>
                  
                             <div class='form-group'>
                                       <label>Date Slot:</label>
                                         <input type='text' id='date' class='input datepicker' value='$today'  name='selected_date'/>
                                         </div>
                             </div>
                  

                             <label>Select time slots</label><br><br>";
                             foreach($slots as $key){ 
                                //  echo "slots"; $key->time_id;
                            
                                echo" 
                                
                                <label class='container1'><p>$key->slot_time</p>
                                <input type='checkbox' name='check_list[]' value='$key->time_id' />
                                <span class='checkmark'></span>
                                </label>
                              
                              ";
                            
                            } echo"<br><br>";
                            if(null !== ($this->session->userdata('user')))                      
                              {  echo "<a href='../order_summary/index?service_id=$row->service_id&service_name=$row->service_name&service_details=$row->service_details&service_cost=$row->service_sub_details&service_date=$today' style='float:right;color:#51627C;'><button type='button' class='btn btn-default' >Confirm Booking</button></a><br>";         
                                             }                  
                               else{  echo "<a href='../customer/cust_register' style='float:right;color:#51627C;'><button type='button' class='btn btn-default' >Confirm Booking</button></a><br>";                        }

                  echo"
                </div>
                </form>";
             }
?>













</div>





 <script type="text/javascript">
          $(function () {
              $("#date").datepicker({
                  minDate: 0,
                  maxDate: "+60D",
                  dateFormat: 'yy-mm-dd',
           
              });
          });
</script>

