
<style>
.container{
    margin-top:100px;
    /* margin-bottom:150px; */
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
              <div class='col-md-3 services_display'>
               <form>
              <div class='caption'>
                  <p>$row->sp_name .</p>
                  <p>$row->sp_desc .</p>
                  <p>$row->sp_address .</p>
                  <p>$row->sp_email .</p>
                  <p>$row->sp_phone .</p>
                  <img src='$row->sp_image'>
                
                 
                 
                  <a href='serviceprovider_details?sp_id=$row->sp_id' style='float:right;color:#51627C;'>Book Now</a><br>
                 
                    
  
              </div>
             </form>
              </div>";


               
              }
           ?>
      
    
  </div>

</div><br><br><br><br><br><br><br><br><br><br><br><br>