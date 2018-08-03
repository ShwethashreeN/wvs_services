<style>
.background{
    background:url('/wvs_services/assets/images/background1.jpg')no-repeat;
    background-size:cover;
    height:auto;
    width:100%;
    padding-bottom:50px;
}

.loginwrapper{
    width:32%;
    padding:30px;
    margin-top:180px;
    height:530px;
    border-radius:20px;
    background-color:silver;
    opacity:0.9;
    margin-bottom:60px;
box-shadow:0px 5px 5px 0px #888888;
}

.box-icon{
border:2px solid white;
height:100px;
width:100px;
margin:0 auto;
border-radius:50% 50% 50% 50%;
text-align:center;
margin-bottom:35px;
transform:rotate(0deg) scale(1) skew(0) translateX(0) translateY(0px);
background-color:#515F7C;margin-top:-60px;
}

.service_icon{
height:74px;
width:74px;
color:white;
line-height:70px;
position:absolute;
left:50%;
top:50%;
transform:translateX(-50%) translateY(-50%);z-index:1;
transition:all .3s ease-out;
font-size:30px;
display:inline-block;

}
.group {
position: relative;
margin-bottom: 30px;
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
border-bottom: 1px solid brown;

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
top: -30px;
transform: scale(.75); left: -2px;
font-size: 22px;
color: white;

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
bottom: 0px;
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
        to  { width: 0; background: transparent; }
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
<div class="background">
<div class="row">
            <div class="col-md-4"></div>
            
<div class="col-md-4 loginwrapper">

            <div>
            <div class="box-icon">
<a href=""><span class="glyphicon glyphicon-pencil service_icon"></span></a>
    </div>
                <h3 style="text-align:center;color:white;font-size:30px;margin-top:-20px;"> Sign Up</h3><br><br>


<form method="post">

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

<input type="submit" name="signup" class="btn btn-default" value ="Register" style="margin-top:20px;width:100%;"/>
</form>
</div><br><br>

<hr style="border-bottom:1px solid #515F7C;">
                <h4 style="text-align:center;">Already have an account ? <a href="http://localhost/wvs_services/index.php/customer/cust_login">Login Now</a><h4>
                </div>
                <div class="col-md-4"></div>


</div>

</div>