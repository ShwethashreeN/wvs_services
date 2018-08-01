<style>

.services_display{
word-wrap:break-word;
width:290px;

}
.col-md-3 service_display{
  height:250px;
}

.serv_image{
  transition: transform .2s;
  background-color:#f7f7f7 !important;
}
.serv_image:hover{
  -ms-transform: scale(0.9); /* IE 9 */
    -webkit-transform: scale(0.9); /* Safari 3-8 */
    transform: scale(0.9); 
}
.thumbnail{
  box-shadow:0px 5px 5px 0px #888888;
}
/* .thumbnail:hover{
  transform: scale(1.1);
  box-shadow:0px 5px 10px 0px #888888;
} */
</style>

<div class="container-fluid" style="padding:0px;margin-top:50px;background-color:black;"> 
    <img src="assets/images/img2.jpeg" height="500px" width="100%" style="position:relative;opacity:0.4;">
  <div style="position:absolute;bottom:250px;left:120px;border:5px solid #fff;padding:50px;letter-spacing:2px;">
    <h1 style="color:#fff;font-size:60px;">Your Service At Your Door Step</h1>
    <p style="color:white;font-size:30px;margin-left:150px;letter-spacing:4px;"><em>Serving You Is What We Love To !!!</em></p>
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
                <img src='$row->service_image' alt='No image' class='serv_image' style='height:180px;width:100%;'>
              </a>
              <div class='caption'>
                  <p>$row->service_name .</p>
                  <p>$row->service_desc .</p><br>
                  <a href='serviceproviders/getservices?service_id=$row->service_id'><button type='button' class='btn btn-default' >Book Now</button></a><br>
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
                  <a href='serviceproviders/getcourses?course_id=$row->course_id'><button type='button' class='btn btn-default' >Book Now</button></a><br>
              </div>
              </div>
              </div>";
              }
           ?>
      
    
  </div>
   
  


  <h2>Testimonials</h2>
  <hr class="line_hr"><br><br>


 </div><br><br>




