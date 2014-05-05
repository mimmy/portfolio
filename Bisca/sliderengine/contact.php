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
            <img id="flip" src="img/slidedown.png" alt="flip"/>
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
<h3 id="contacttitle">Do you have any questions or feedback? Contact us!</h3>
		<div id="blah"><form>
<input id="namename" type="text" name="name" placeholder="Name"><br>
<input id="phonephone" type="text" name="email" placeholder="E-mail">
<input type="text" name="phone" placeholder="Phone number"><br>
<textarea cols="50" rows="7" name="message" placeholder="Tell us about it"></textarea>
<input id="button" type="submit" value="Submit">
</form>       

<div id="contactcontact">
<h4>Contakt information:</h4>
<p>Bisca A/S</p>
<p>Ahornvej 1</p>
<p>DK-4780 Stege</p>
<p>Denmark</p>
<br />
<p>E-mail: info@bisca.com</p>
<br/>
<p>Tlf.: +45 72 11 00 00</p>
<p>Fax: +45 72 11 00 72</p>
</div>
</div>


<div id="footer"><?php echo footer(); ?></div>
</div>

</body>
</html>
