<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- HTML Codes by Quackit.com -->
<title>
Bisca's Healthy Biscuits</title>
<meta name="keywords" content="biscuits, cookies, Denmark, Danmark, Danish, healthy"/>
<meta name="description" content="Bisca's healthy alternative to cookies, designed for the Danish taste!"/>
<meta name="viewport" content="width=device-width; initial-scale=1.0">
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>
<script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <script src="sliderengine/initslider-1.js"></script>
    <?php include_once('phplib.inc.php'); ?>
    
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="container">
	<div id="topnav">
    	<img id="logo" src="img/logo.png" />
        <nav id="topmenu">
            <ul>
            	<li id="topnav_home"><a href="index.php">Home</a></li>
                <li id="topnav_products"><a href="products.php">Products</a></li>
				<li id="topnav_tips"><a href="ohno.php">Tips and Inspiration</a></li>
				<li id="topnav_about"><a href="ohno.php">About Bisca</a></li>
				<li id="topnav_contact"><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <div id="topright">
        	 <div id="socialmedia">
          <ul id="social">
                    <li><a href="http://facebook.com"><img src="img/face.png" alt="face"/></a></li>
                    <li><img src="img/pin.png" alt="pinterest"/></li>
                    <li><img src="img/insta.png" alt="instagram"/></li>
                    <li><img src="img/you.png" alt="youtube"/></li>
                    </ul>
      </div>
            <div id="sesarch"></div>
            <img id="flip" src="img/slidedown.png" />
            <div id="panel">
            <ul>
        	    <li id="topnav_home"><a href="index.php">Home</a></li>
                <li id="topnav_products"><a href="products.php">Products</a></li>
				<li id="topnav_tips"><a href="ohno.php">Inspiration</a></li>
				<li id="topnav_about"><a href="ohno.php">About Bisca</a></li>
				<li id="topnav_contact"><a href="contact.php">Contact</a></li>
            </ul>
            </div>
        </div>
	</div>
 <div style="margin:40px auto;max-width:1100px;">
    
    <!-- Insert to your webpage where you want to display the slider -->
    <div id="amazingslider-1" style="display:block;position:relative;margin:16px auto 32px;">
        <ul class="amazingslider-slides" style="display:none;">
            <li><img src="images/slide1SMALL.png" alt="slide1SMALL" /></li>
            <li><img src="images/slide2.png" alt="slide2" /></li>
            <li><img src="images/slide3.png" alt="slide3" /></li>
            <li><img src="images/slide4.png" alt="slide4" /></li>
        </ul>
        <ul class="amazingslider-thumbnails" style="display:none;">
            <li><img src="images/slide1SMALL-tn.png" alt="slide"/></li>
            <li><img src="images/slide2-tn.png" alt="slide"/></li>
            <li><img src="images/slide3-tn.png" alt="slide"/></li>
            <li><img src="images/slide4-tn.png" alt="slide"/></li>
        </ul>
        <div class="amazingslider-engine" style="display:none;"><a href="http://amazingslider.com">JavaScript Image Slider</a></div>
    </div>
    <!-- End of body section HTML codes -->
    
</div>
		<div id="bottom1">
            <div class="bottom" id="products">
            <h3>Products</h3>
            <p>The natural choice for something delicious and healthy. Ideal during sporting events, quick lunches or just as a snack to get you trough the day.</p>
            <img src="img/img Products.png" alt="products"/>
            </div>
            <div class="bottom" id="thenaturalchoice">
            <h3>The natural choice</h3>
            <p>We are proud to develop the quality products with the highest energy savings. And we always strives for improvements!</p>
            <img src="img/img Natural.png" alt="natural"/>
            
            </div>
            <div class="bottom" id="tips">
            <h3>Tips& recipies</h3>
            <p>Check out our tips: healthy and easy to make! More info about tips and competitions you'll find on our facebook page.</p>
            <img src="img/img Tips&inspirations.png" alt="tips"/>
            </div>    
        </div>   
          <div id="footer"><?php echo footer(); ?></div>       
</div>

</body>
</html>
