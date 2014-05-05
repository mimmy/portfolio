<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- HTML Codes by Quackit.com -->
<title>
Bisca's Healthy Biscuits</title>
<meta name="keywords" content="biscuits, cookies, Denmark, Danmark, Danish, healthy"/>
<meta name="description" content="Bisca's healthy alternative to cookies, designed for the Danish taste!"/>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>
  
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
				<li id="topnav_tips"><a href= "ohno.php">Tips and Inspiration</a></li>
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
				<li id="topnav_tips"><a href= "ohno.php">Inspiration</a></li>
				<li id="topnav_about"><a href="ohno.php">About Bisca</a></li>
				<li id="topnav_contact"><a href="contact.php">Contact</a></li>
            </ul>
            </div>
        </div>
	</div>
<h1>Work in progress! Coming soon!</h1>

</div>

</body>
</html>
