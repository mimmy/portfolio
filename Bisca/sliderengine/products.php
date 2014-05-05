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
<div class="someproduct">
<img class="min" src="img/Stemning All_in_Onemin.jpg" alt="allinone"/>
<h3>On the go</h3>

<img class="rightimage" src="img/Stemning All_in_One.jpg" alt="allinone"/>
<img class="mid" src="img/Stemning All_in_Onemid.png" alt="allinone"/>
<p>All in One is a range of biscuits with dried vegetables - with figs and sesame seeds or root vegetables</p>

<p>You will find All in One in convenient individually-wrapped double pack - perfect for on the go snacks during sport events, quick lunches or just as a snack to get you trough the day. </p>

<a href="allinone.php"><img class="leftimage" src="img/all-in-oneproducts.png" alt="allinone"/></a>
</div>


<div class="someproduct">
<img class="min" src="img/Rusks1min.png" alt="rusks"/>
<h3>Rusks</h3>

<img class="rightimage" src="img/Rusks1.png" alt="rusks"/>
<img class="mid" src="img/Rusks1mid.png" alt="rusks"/>
<p>Crispy rusks in the morning or in the evening.</p>


<img class="leftimage" src="img/Rusk products.png" alt="rusks"/>
</div>

<div class="someproduct">
<img class="min" src="img/Crisp rollsmin.png" alt="crisp rolls"/>
<h3>Crisp Rolls</h3>

<img class="rightimage" src="img/Crisp rolls.png" alt="crisp rolls"/>
<img class="mid" src="img/Crisp rollsmid.png" alt="crisp rolls" />
<p>Crisp rolls together with cheese or crunched in a salad.</p>


<img class="leftimage" src="img/Crisp rolls products.png" alt="crisp rolls"/>

</div>

<div class="someproduct">
<img class="min" src="img/Oat Buiscuitsmin.png" alt="oat biscuits"/>
<h3>Crisp Rolls</h3>

<img class="rightimage" src="img/Oat Buiscuits.png"  alt="oat biscuits"/>
<img class="mid" src="img/Oat Buiscuitsmid.png"  alt="oat biscuits"/>
<p>Crisp rolls together with cheese or crunched in a salad.</p>


<img class="leftimage" src="img/Oat Buiscuits products.png"  alt="oat biscuits"/>

</div>

<div id="footer"><?php echo footer(); ?></div>

</div>

</body>
</html>
