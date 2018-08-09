


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
img{
    border-radius:50%;
}
img:hover{
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
              <div class='col-md-3' style='padding:40px;box-shadow:0px 5px 10px 0px #888888;margin-right:40px;'>
                 <img src='../assets/images/img_avatar.png' alt='no image' style='width:150px;margin-left:20px;'>
                  <h3>$row->sp_name .</h3>
                 
                  <p>$row->sp_email .</p>
                  <p>$row->sp_phone .</p><br>
                  <p><b>Ratings </b>: <span class='glyphicon glyphicon-star'></span><span class='glyphicon glyphicon-star'></span><span class='glyphicon glyphicon-star'></span><span class='glyphicon glyphicon-star-empty'></span><span class='glyphicon glyphicon-star-empty'></span> </p>
                  <a href='serviceprovider_details?sp_id=$row->sp_id'><button type='button' class='btn btn-default' >Check Availability</button></a><br>
              </div>";


               
              }
           ?>
      

  </div>
  
</div><br><br><br><br><br><br>

