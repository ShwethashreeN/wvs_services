
<style>
footer {
      background-color: #515F7C;
      color: white;
      padding:1px;
  }
  footer a {
      color: #f5f5f5;
  }
  .text-center a:hover {
      color: #000 !important;
      text-decoration: none;
  }  
</style>

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

<!-- <div class="footer">
   
<div class="row">
    <div class="col-md-4">
    </div>
     
     <div class="col-md-4" style="padding-left:60px;">
     <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
         <span class="glyphicon glyphicon-chevron-up"></span>
     </a>
        <p style="color:white;"> Powered by © 2018 <a>World Vision Softek</a></p>
     </div>

     <div class="col-md-4">
    </div>




</div>
</div> -->

<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Powered by <a href="https://www.wvsoftek.com">World Vision Softek</a></p> 
</footer>

</body>
</html>