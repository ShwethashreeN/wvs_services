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
</style>

<div class="container">
<h2> Service Provider Details</h2>
<hr class="line_hr"><br><br>
<div class="row providers_display" >

        <?php 
             foreach($data as $row)  
             {
                
              
              echo "
              <form method='post'>
               <div class='col-md-7 services_display'>
               <div class='caption'>
               <img src=$row->service_avatar alt='no image' style='width:150px;margin-left:20px;' id='profile_image'><br><br>
                        <p><b>Name</b> :    $row->service_name .</p>
                        <p><b>About</b> :      $row->service_details .</p>
                        <p><b>Address</b> :    $row->service_address .</p>
                        <p><b>Price/Cost </b> : $row->service_sub_details .</p>
                       
                        
                        <div class='form-group'>
                        <label class='control-label'>Date Slot:</label>
                           <input type='text' id='date' class='input datepicker' placeholder='yyyy-mm-dd' name='expected_date'/>
                         </div>
                         
                         <div class='form-group'>
                         <label class='control-label'>Time Slot:</label>
                             <select  name='timeslot' id='timeslot' disabled >
                             <option  value=''>--Choose Timeslot--</option>
                             </select>
                          </div>
                         

                         <div id='time_slots'>
                          <h3>Select the time slot</h3>
                      
                              <div style='border:1px solid brown;border-radius:8px;margin-top:5px;width:12%;box shadow:5px 10px #dddddd;padding:5px;'>
                                  <a style='line-height:10px;text-decoration:none;cursor:pointer;' >9:00 AM</a>
                              </div>
                              <div style='border:1px solid brown;border-radius:8px;margin-top:5px;width:12%;box shadow:5px 10px #dddddd;padding:5px;'>
                                  <a style='line-height:10px;text-decoration:none;cursor:pointer;' >10:00 AM</a>
                              </div>

                         </div>
                         <br><br><br><br>
                        
                        
                        ";
                        
                        if(null !== ($this->session->userdata('user')))
                        {
                        echo "<a href='../payment/index' style='float:right;color:#51627C;'><button type='button' class='btn btn-default' >Confirm Booking</button></a><br>";
                        }
                       
                        else{
                          echo "<a href='../customer/cust_register' style='float:right;color:#51627C;'><button type='button' class='btn btn-default' >Confirm Booking</button></a><br>";
                        }
                        

              echo" </div>
               </div>
               </form>";

              
               
              }
           ?>
      
    
  </div>
  
</div><br><br><br><br><br><br>

   
   <script type="text/javascript">
            $(function() {
                $("#date").datepicker({
                    minDate : 0,
                    dateFormat: 'yy-mm-dd'
                });
                
            });
        </script>







 <!-- <script type="text/javascript">
 $(document).ready(function(){
 	$('#datepicker').on('change',function(){

 		var value=$(this).val();
    // var value = $('#datepicker').datepicker('getDate');
    
 		alert(value);
 		if(value=='')
 		{
 			$('#timeslot').prop('disabled',true);
 		}
 		else{
 			$('#timeslot').prop('disabled',false);
      
 			$.ajax({
 					url:"http://localhost/wvs_services/Serviceproviders/get_timeslot",
 					type:"POST",
           data:{'value':value},
 					// dataType:'json',
         
 					success:function(data){
 						$('#timeslot').html(data);
 					},
 					error:function(){
 						alert(error);
 					}

 			});
      
 		}

 	});



 });

</script> -->





<!-- <script>

          $(document).ready(function(){
              $("#date").change(function(){
                var date = $('#date').val();
                //alert(date);
                  $.ajax({
                    url: "<?php echo base_url(); ?>index.php/Serviceproviders/get_timeslot",
                    data :date,
                    //dataType: 'json',
                    type: "post",
                    success: function(data){
                     alert(date);
                    }

                  });
              });
             
          });
   </script> -->


   <script type="text/javascript">
 $(document).ready(function(){
 	$('#date').on('change',function(){

 		var value=$(this).val();
 		//alert(value);
 		if(value=='')
 		{
 			$('#timeslot).prop('disabled',true);
 		}
 		else{
 			$('#timeslot').prop('disabled',false);
 			$.ajax({
 					url:"<?php echo base_url() ?>Serviceproviders/get_timeslot",
 					type:"POST",
 					data:{'value':value},
 					dataType:'json',
 					success:function(data){
 						$('#timeslot').html(data);
 					},
 					error:function(){
 						alert('error');
 					}

 			});
 		}

 	});



 });


 </script>