
<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<title>Wvs Schedular</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
<link href="https://fonts.googleapis.com/css?family=Jura|Poppins" rel="stylesheet">
   
 <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style_custom.css"> 

  
</head> -->

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

<div class="footer">
   
<div class="row">
    <div class="col-md-4">
    </div>
     
     <div class="col-md-4" style="padding-left:60px;">
     <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
         <span class="glyphicon glyphicon-chevron-up"></span>
     </a>
         <a style="font-family:'Jura', sans-serif;">Powered by © 2018 World Vision Softek</a>
     </div>

     <div class="col-md-4">
    </div>




</div>
</div>

</body>
</html>