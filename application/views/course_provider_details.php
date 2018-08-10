
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
</style>
<div class="container">
<h2> Course Provider Details</h2>
<hr class="line_hr"><br><br>
<div class="row providers_display" >
<div id="datepicker">
</div>
        <?php 
             foreach($data as $row)  
             {
                
              
              echo "
              <form method='post'>
               <div class='col-md-7 services_display'>
               <div class='caption'>
               <img src='../assets/images/img_avatar.png' alt='no image' id='profile_image' style='width:150px;margin-left:20px;'><br><br>
                        <p><b>About</b> : $row->cp_about.</p>
                        <p><b>Details</b> : $row->cp_desc.</p>
                        <p><b>Address</b> : $row->cp_address.</p>
                        <p><b>Course start date</b> : $row->cp_course_start_date.</p>
                        <p><b>Last date for joining</b> : $row->cp_course_lastbookingdate.</p>
                        <p><b>Timings</b> : $row->cp_timings.</p>
                        <p><b>Batch</b> : $row->cp_batch.</p>
                        <p><b>Fees </b>: $row->cp_fees .</p>
                        <p><b>Ratings </b>: <span class='glyphicon glyphicon-star'></span><span class='glyphicon glyphicon-star'></span><span class='glyphicon glyphicon-star'></span><span class='glyphicon glyphicon-star-empty'></span><span class='glyphicon glyphicon-star-empty'></span> </p>
                      
                       
                       <input type='text' id='datep' />
                       <div id='datepicker'>
                         
                         
                       </div>";
                        
                        if(null !== ($this->session->userdata('user')))
                        {
                        echo "<a href='../payment/index' style='float:right;color:#51627C;'><button type='button' class='btn btn-default' > Book Now</button></a><br>";
                        }
                       
                        else{
                          echo "<a href='../customer/cust_register' style='float:right;color:#51627C;'><button type='button' class='btn btn-default' >Book Now</button></a><br>";
                        }
                        

              echo" </div>
               </div>
               
               </form>";
               echo "
               <div class='col-md-4' style='margin-left:50px;'>
               <div class='list-group'>
               <a href='#' class='list-group-item active'>
                 <h3 class='list-group-item-heading' style='text-align:center;'>Recommended For You</h3>
               
               </a>
               <a href='#' class='list-group-item'>
                 <h4 class='list-group-item-heading'>Second List Group Item Heading</h4>
                 <p class='list-group-item-text'>List Group Item Text</p>
               </a>
               <a href='#' class='list-group-item'>
                 <h4 class='list-group-item-heading'>Third List Group Item Heading</h4>
                 <p class='list-group-item-text'>List Group Item Text</p>
               </a>
               <a href='#' class='list-group-item'>
                 <h4 class='list-group-item-heading'>Second List Group Item Heading</h4>
                 <p class='list-group-item-text'>List Group Item Text</p>
               </a>
               <a href='#' class='list-group-item'>
                 <h4 class='list-group-item-heading'>Third List Group Item Heading</h4>
                 <p class='list-group-item-text'>List Group Item Text</p>
               </a>
               <a href='#' class='list-group-item'>
                 <h4 class='list-group-item-heading'>Second List Group Item Heading</h4>
                 <p class='list-group-item-text'>List Group Item Text</p>
               </a>
               <a href='#' class='list-group-item'>
                 <h4 class='list-group-item-heading'>Third List Group Item Heading</h4>
                 <p class='list-group-item-text'>List Group Item Text</p>
               </a>
             </div>
             </div>
               ";
               
               
               
               
              }
           ?>
      
    
  </div>
  
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>