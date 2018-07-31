<style>
.container{
    margin-top:100px;
    /* margin-bottom:150px; */
}
</style>
<div class="container">
<h2> Service Provider Details</h2>
<hr class="line_hr"><br><br>
<div class="row" >
        <?php 
             foreach($data as $row)  
             {
                
              
              echo "
               <div class='col-md-3 services_display'>
               <div class='caption'>
                        <p>$row->sp_details.</p>
                        <p>$row->sp_price .</p>
                        <p>$row->sp_date_slot.</p>
                        <p>$row->sp_time_slot.</p>";

                        if(isset($_POST['cust_id']))
                        {
                        echo "<a href='payment/payment' style='float:right;color:#51627C;'>Book Now</a><br>";
                        }
                       
                        else{
                          echo "<a href='../customer/cust_register' style='float:right;color:#51627C;'>Book Now</a><br>";
                        }
                        

              echo" </div>
               </div>";
               
               
              }
           ?>
      
    
  </div>

</div><br><br><br><br><br>