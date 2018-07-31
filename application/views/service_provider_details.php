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
              <form method='post'>
               <div class='col-md-3 services_display'>
               <div class='caption'>
                        <p><b>Details</b> : $row->sp_details.</p>
                        <p><b>Price </b>: $row->sp_price .</p>
                        <p><b>Date slot </b>: $row->sp_date_slot.</p>
                        <p><b>Time slot</b> : $row->sp_time_slot.</p>";
                        echo "<input type='date' name='date' >";
                        
                        
                        if(null !== ($this->session->userdata('user')))
                        {
                        echo "<a href='../payment/payment_start' style='float:right;color:#51627C;'>Book Now</a><br>";
                        }
                       
                        else{
                          echo "<a href='../customer/cust_register' style='float:right;color:#51627C;'>Book Now</a><br>";
                        }
                        

              echo" </div>
               </div>
               
               </form>";
               
               
              }
           ?>
      
    
  </div>

</div><br><br><br><br><br>