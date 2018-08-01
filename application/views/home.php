<style>
    .container{
        margin-left:50px;
        margin-top:20px;
    }
    h1,h2{
font-family: 'Jura', sans-serif;
color:#51627C;
}
h3,h4,h5,h6{
    font-family: 'Jura', sans-serif;
    color:	#585858;
}
.col-md-3{
    padding-top:20px;
}
.col-md-3 a{
    text-decoration:none;
}
.services_display{
word-wrap:break-word;
width:290px;

}
.col-md-3 service_display{
  height:250px;
}




</style>

<div class="container-fluid" style="padding:0px;margin-top:50px;">
 <div>   
    <img src="assets/images/img2.jpeg" height="500px" width="100%">
</div>
</div>

<div class="container">  
    <!-- <h2>OUR-STUDIO</h2> 
    <hr class="line_hr" ><br><br>
    
      <div class="row">    
          <div class="col-md-3 text-center">     
              <a href=""><img src="/wvs_schedular_app/assets/images/courses.gif" height="150" width="150">    
               <p style="color:#585858;padding-top:20px;font-size:18px;">Courses</p> </a>  
             </div>   
              <div class="col-md-3 text-center">   
              <a href=""> <img src="/wvs_schedular_app/assets/images/services.gif" height="150" width="150">   
              <p style="color:#585858;padding-top:20px;font-size:18px;">Services</p> </a>
                </div>    
                <div class="col-md-3 text-center">   
                <a href=""> <img src="/wvs_schedular_app/assets/images/book_now.gif" height="150" width="150">   
                <p style="color:#585858;padding-top:20px;font-size:18px;">Book Now</p> </a>  
                     </div>
                     <div class="col-md-3 text-center">   
                     <a href=""> <img src="/wvs_schedular_app/assets/images/offers.gif" height="150" width="150">   
                     <p style="color:#585858;padding-top:20px;font-size:18px;">Offers</p> </a>  
                </div>   
                     </div><br> -->

<h2>Recommended Services</h2>
<hr class="line_hr"><br><br>
<div class="row" >
        <?php 
             foreach($this->a->fetchservices() as $row)  
             {
                
              echo "
              <div class='col-md-3 services_display'>
               <div class='thumbnail'>
              <a href='serviceproviders/getservices?service_id=$row->service_id'>
                <img src='$row->service_image' alt='No image' style='width:100%;height:180px;'>
              </a>
              <div class='caption'>
                  <p>$row->service_name .</p>
                  <p>$row->service_desc .</p>
                  <a href='serviceproviders/getservices?service_id=$row->service_id' style='float:right;color:#51627C;'>Book Now</a><br>
              </div>
              </div>
              </div>";
              }
           ?>
      
    
  </div>
 
<h2>Recommended Courses</h2>
<hr class="line_hr"><br><br>
<div class="row" >
        <?php 
             foreach($this->a->fetchcourses() as $row)  
             {
                
              echo "
              <div class='col-md-3 services_display'>
               <div class='thumbnail'>
              <a href='serviceproviders/getcourses?course_id=$row->course_id'>
                <img src='$row->course_image' alt='No image' style='width:100%;height:180px;'>
              </a>
              <div class='caption'>
                  <p>$row->course_name .</p>
                  <p>$row->course_desc .</p>
                  <a href='serviceproviders/getcourses?course_id=$row->course_id' style='float:right;color:#51627C;'>Book Now</a><br>
              </div>
              </div>
              </div>";
              }
           ?>
      
    
  </div>
   
  


  <h2>Testimonials</h2>
  <hr class="line_hr"><br><br>


 </div><br><br>




