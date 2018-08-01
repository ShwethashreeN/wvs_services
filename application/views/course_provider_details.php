
<script>
var $datePicker = $("div#datepicker");

// var $datePicker = $("div");

$datePicker.datepicker({
    changeMonth: true,
    changeYear: true,
    inline: true,
    altField: "#datep",
}).change(function(e){
    setTimeout(function(){   
        $datePicker
            .find('.ui-datepicker-current-day')
            .parent()
            .after('<tr>\n\
                        <td colspan="8">\n\
                            <div> \n\
                                <button>8:00 am – 9:00 am </button>\n\
                            </div>\n\
                            <button>9:00 am – 10:00 am</button>\n\
                            </div>\n\
                            <button>10:00 am – 11:00 am</button>\n\
                            </div>\n\
                        </td>\n\
                   </tr>');

    });
});
</script>
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

</style>
<div class="container">
<h2> Course Provider Details</h2>
<hr class="line_hr"><br><br>
<div class="row" >
<div id="datepicker">
</div>
        <?php 
             foreach($data as $row)  
             {
                
              
              echo "
              <form method='post'>
               <div class='col-md-3 services_display'>
               <div class='caption'>
                        <p><b>About</b> : $row->cp_about.</p>
                        <p><b>Details</b> : $row->cp_about.</p>
                        <p><b>Price </b>: $row->cp_price .</p>
                        <p><b>Date slot </b>: $row->cp_date_slot.</p>
                        <p><b>Time slot</b> : $row->cp_time_slot.</p>
                       
                       <input type='text' id='datep' />
                       <div id='datepicker'>
                         
                         
                       </div>";
                        
                        if(null !== ($this->session->userdata('user')))
                        {
                        echo "<a href='../payment/index' style='float:right;color:#51627C;'>Confirm Booking</a><br>";
                        }
                       
                        else{
                          echo "<a href='../customer/cust_register' style='float:right;color:#51627C;'>Confirm Booking</a><br>";
                        }
                        

              echo" </div>
               </div>
               
               </form>";
               
               
              }
           ?>
      
    
  </div>
  
</div><br><br><br><br><br><br><br><br><br><br>