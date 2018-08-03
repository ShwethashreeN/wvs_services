<style>
.container{
    margin-top:120px;
    /* margin-bottom:150px; */
}
.group { 
		position: relative; 
		margin-bottom: 20px; 
	}
	
	.inputline {
		font-size: 14px;
		padding: 5px 5px 10px 0px;
		-webkit-appearance: none;
		display: block;
		background: #fafafa;
		color: #636363;
		width: 100%;
		border: none;
		border-radius: 0;
		border-bottom: 1px solid #757575;
	}
	
	.inputline:focus { outline: none; }
	
	
	/* Label */
	
	#navlabel {
		color: black; 
		font-size: 16px;
		font-weight: normal;
		position: absolute;
		pointer-events: none;
		left: 5px;
		top: 5px;
		transition: all 0.2s ease;
	}
	
	
	/* active */
	
	.inputline:focus ~ #navlabel, .inputline.used ~ #navlabel {
		top: -20px;
	  transform: scale(.75); left: -2px;
		/* font-size: 14px; */
		color: brown;
	}
	
	
	/* Underline */
	
	.bar {
		position: relative;
		display: block;
		width: 100%;
	}
	
	.bar:before, .bar:after {
		content: '';
		height: 2px; 
		width: 0;
		bottom: 1px; 
		position: absolute;
		background: brown; 
		transition: all 0.2s ease;
	}
	
	.bar:before { left: 50%; }
	
	.bar:after { right: 50%; }
	
	
	/* active */
	
	.inputline:focus ~ .bar:before, .inputline:focus ~ .bar:after { width: 50%; }
	
	
	/* Highlight */
	
	.highlight {
		position: absolute;
		height: 60%; 
		width: 100px; 
		top: 25%; 
		left: 0;
		pointer-events: none;
		opacity: 0.5;
	}
	
	
	/* active */
	
	.inputline:focus ~ .highlight {
		animation: inputHighlighter 0.3s ease;
		
	}
	#navinput{
		background:#e5e5e5;
		}
		
	/* Animations */
	
	@keyframes inputHighlighter {
		from { background: brown; }
		to 	{ width: 0; background: transparent; }
    }
    .btn-primary{
        border:none !important;
        background-color:brown;
    }
    .btn-primary a:hover{
        background-color:brown !important;
    }
</style>
<script>
   $(window, document, undefined).ready(function() {

$('input').blur(function() {
  var $this = $(this);
  if ($this.val())
    $this.addClass('used');
  else
    $this.removeClass('used');
});

var $ripples = $('.ripples');

$ripples.on('click.Ripples', function(e) {

  var $this = $(this);
  var $offset = $this.parent().offset();
  var $circle = $this.find('.ripplesCircle');

  var x = e.pageX - $offset.left;
  var y = e.pageY - $offset.top;

  $circle.css({
    top: y + 'px',
    left: x + 'px'
  });

  $this.addClass('is-active');

});

$ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
  $(this).removeClass('is-active');
});

});
</script>
<div class="container">
    <h2> Register here</h2>
        <hr class="line_hr"><br><br>
            <div class="row" >
                <div class="col-md-5">
                    <form method="post">
                        <div class="from-cotrol">
                            <div class="form-group">
                            <div class="group">
                                <input type="text" 
                                    class="inputline" 
                                    id="name"    
                                    name="name"
                                    required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <p id="navlabel">Full Name</p>
                            </div>   
                            </div>
                        </div>

                        <div class="from-cotrol">
                            <div class="form-group">
                            <div class="group">
                                <input type="email" 
                                    class="inputline" 
                                    id="email"    
                                    name="email"
                                    required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <p id="navlabel">Email</p>
                            </div>   
                            </div>
                        </div>

                        <div class="from-cotrol">
                            <div class="form-group">
                            <div class="group">
                                <input type="text" 
                                    class="inputline" 
                                    id="phone"    
                                    name="phone"
                                    required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <p id="navlabel">Phone</p>
                            </div>   
                            </div>
                        </div>

                        <div class="from-cotrol">
                            <div class="form-group">
                            <div class="group">
                                <input type="password" 
                                    class="inputline" 
                                    id="pwd"    
                                    name="pwd"
                                    required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <p id="navlabel">Password</p>
                            </div>   
                            </div>
                        </div>

                        <input type="submit" name="signup" class="btn btn-default" value ="Register" style="float:right;margin-top:40px;"/>
                    </form>
                </div>
       
      
    
             </div><br><br>
             <p>Already Customer ?<a href="./cust_login">Login here</a></p>
</div><br><br><br><br><br><br><br><br><br><br><br><br>