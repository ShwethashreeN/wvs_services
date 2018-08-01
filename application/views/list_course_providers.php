
<style>
.container{
    margin-top:100px;
    /* margin-bottom:150px; */
}
</style>
<div class="container">
<h2>Available Course Providers</h2>
<hr class="line_hr"><br><br>
<div class="row" >
        <?php 
             foreach($data as $row)  
             {
                
              echo "
              <div class='col-md-3 services_display'>
               <form>
              <div class='caption'>
                  <p>$row->cp_name .</p>
                  <p>$row->cp_desc .</p>
                  <p>$row->cp_address .</p>
                  <p>$row->cp_email .</p>
                  <p>$row->cp_phone .</p>
                  <img src='$row->cp_image' style='height:100px;width:100px;'>
                
                 
                 
                  <a href='courseprovider_details?cp_id=$row->cp_id' style='float:right;color:#51627C;'>Book Now</a><br>
                 
                    
  
              </div>
             </form>
              </div>";


               
              }
           ?>
      
    
  </div>

</div><br><br><br><br><br><br><br><br><br><br><br><br>