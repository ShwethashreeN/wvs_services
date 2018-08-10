
<style>

#datep {
    display: none;
}

.ui-datepicker-calendar tbody td > a.hover-calendar-cell {
    border: 1px solid #074e91;
    background: #5bacf7 url(images/ui-bg_glass_15_5bacf7_1x400.png) 50% 50% repeat-x;
    font-weight: normal;
    color: #1a1a1a;
}
#addon{background-color:#999; width:100%}
.container{
    margin-top:100px;
    /* margin-bottom:150px; */
}
#profile_image{
  border-radius:2%;
}
#profile_image:hover{
    border:10px solid #f1f1f1;
    /* box-shadow:0px 5px 10px 0px #888888; */
}
</style>
<div class="container">
<h2>Available Service Providers</h2>
<hr class="line_hr"><br><br>
<div class="row" >
        <?php 
             foreach($data as $row)  
             {
                
              echo "
              <div class='col-md-3' style='padding:20px;box-shadow:0px 5px 10px 0px #888888;margin-right:40px;'>
                 <img src=$row->service_avatar alt='no image' id= 'profile_image' style='width:250px;margin-bottom:20px;'>
                  <h4 class='text-center'>$row->service_name .</h4>
                 
                  <p>$row->service_address .</p>
                  <p>$row->service_sub_details .</p><br>
            
                  <a href='serviceprovider_details?service_id=$row->service_id'><button type='button' class='btn btn-default' >Check Availability</button></a><br>
              </div>";


               
              }
           ?>
      

  </div>
  
</div><br><br><br><br><br><br>

