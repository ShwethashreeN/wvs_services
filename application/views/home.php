<style>
.container{
    margin-left:50px;
    margin-top:20px;
}
h1,h2{
font-family: 'Palanquin Dark', sans-serif;
color:#51627C;
}
h3,h4,h5,h6{
    font-family: 'Palanquin Dark', sans-serif;
    color:	#585858;
}
.col-md-3{
    padding-top:20px;
}
.col-md-3 a{
    text-decoration:none;
}
p{
  font-family: 'Quicksand', sans-serif;
}
.services_display{
word-wrap:break-word;
width:290px;

}
.col-md-3 service_display{
  height:250px;
}




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
              <a href='getservices?service_id=$row->service_id'>
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
              <a href='list_service_providers?id=$row->course_id'>
                <img src='$row->course_image' alt='No image' style='width:100%;height:180px;'>
              </a>
              <div class='caption'>
                  <p>$row->course_name .</p>
                  <p>$row->course_desc .</p>
                  <a href='list_service_providers?id=$row->course_id' style='float:right;color:#51627C;'>Book Now</a><br>
              </div>
              </div>
              </div>";
              }
           ?>
      
    
  </div>
   
  


  <h2>Testimonials</h2>
  <hr class="line_hr"><br><br>


 </div><br><br>




