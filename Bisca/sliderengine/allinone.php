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
 		<div id="bottom1">
            <div class="bottom" id="figs">
            <h3>All in One 
with figs and sesame seeds</h3>
            <p>All in One with figs and sesame seeds. Contains 5 single packs. Based on wheat flour, dried figs 19% and whole meal flour 19% . An easy snack on the go.</p>
            <img src="img/ALLinONEproduct1.png" alt="allinone"/>
            </div>
            <div class="bottom" id="carrots">
            <h3>All in One with Carrots, Celery and Parsnip</h3>
            <p>All in One with dried carrots 34%, celery and parsnip. Contains 5 single packs. Based on wheat flourand whole meal flor. An easy snack on the go.</p>
            <img src="img/ALLinONEproduct2.png" alt="allinone"/>
            
            </div>
            <div class="bottom" id="tomatoes">
            <h3>All in One with dry tomatoes</h3>
            <p>All in One with tomatoes and and sundried tomatoes based on wheat flour and whole meal flour. Contains 5 single packs - on the go.</p>
            <img src="img/ALLinONEproduct3.png" alt="allinone"/>
            </div>  
                <div class="bottom" id="figs">
            <h3>Tip -top Salad with croutons</h3>
            <p>Mix a salad for the lunch pack and crack the  All in One biscuits into smaller pieces as croutons to dress the salad up.</p>
            <img src="img/TIP1.png" alt="allinone"/>
            </div>  
            <div class="bottom" id="figs">
            <h3>The lunch pack with biscuits and dressing</h3>
            <p> Take an All in One biscuit and a cucumber, a carrot, a red pepper and one stalk celery. Mix a quick dressing with cremefraice 9% and a little grated onion. Spice with herbs.</p>
            <img src="img/TIP2.png" alt="allinone" />
            </div>
        
            <div class="bottom" id="figs">
            <h3>Competitions - like us on facebook and win prizes!</h3>
            <p>We would love to make you compete for the cool and healthy prizes. Check out our <a href="facebook.com">facebook</a> page!</p>
            <img src="img/TIP3.png" alt="allinone" />
            </div>
        </div>   
          <div id="footer"><?php echo footer(); ?></div>       
</div>

</body>
</html>
