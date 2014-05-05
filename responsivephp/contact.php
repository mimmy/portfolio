<?php
session_start();
if (stristr($_SERVER['HTTP_USER_AGENT'],'Android') || 
 stristr($_SERVER['HTTP_USER_AGENT'],'webOS') || 
 stristr($_SERVER['HTTP_USER_AGENT'],'iPhone') || 
 stristr($_SERVER['HTTP_USER_AGENT'],'iPod') || 
 stristr($_SERVER['HTTP_USER_AGENT'],'Bada') || 
 stristr($_SERVER['HTTP_USER_AGENT'],'Blackberry') || 
 stristr($_SERVER['HTTP_USER_AGENT'],'Windows Phone') || 
 stristr($_SERVER['HTTP_USER_AGENT'],'Symbian') || 
 stristr($_SERVER['HTTP_USER_AGENT'],'Nokia') || 
 stristr($_SERVER['HTTP_USER_AGENT'],'Opera Mobile') || 
 stristr($_SERVER['HTTP_USER_AGENT'],'Opera Mini') 
 ){ 
 $mobile=TRUE; 
 }; 
// $mobile=TRUE; // this line is temporarely to be able to test 
 //mobile version in browser 
 
if ($mobile) { 
 include 'headerm.php'; //small pictures 
}
else { 
 include 'header.php'; //large pictures 
}  ?>
    <div id="content">



<div class="contactcontainer"><form id="contactform1" action="form_handling.php" method="post">
<input id="namename" type="text" name="name" placeholder="Name" required autofocus>
<input id="lastname" type="text" name="lastname" placeholder="Last Name" required><br>
<input id="phonephone" type="email" name="email" placeholder="E-mail" required>
<input type="text" name="phone" placeholder="Phone number" required><br>
<textarea id="details" cols="50" rows="7" name="message" placeholder="Tell us about it" requred></textarea>
<input id="button" type="submit" value="Submit">
</form>       
</div>
<div id="contactcontact">
<h4>Contact</h4>
        <p>Adress: Trangstraede 1, Randers C 8900<br>
        E-mail: bestilling@biabakery.dk <br>
        Phone: 22872047</p>

</div>

    </div>
	
   
 <footer id="footerbcg">
     <div id="footer">
        <div id="one"><a href="#"><img src="imgs/roflag.png" alt="romanian flag"/></a>
        </div>
       <div id="two"><h3>Contact</h3>
        <p>Adress: Trangstraede 1, Randers C 8900<br>
        E-mail: bestilling@biabakery.dk <br>
        Phone: 22872047</p>
        </div>
        <div id="three">
            <a href="https://www.facebook.com/Bia.Bakery" target="_blank"><img src="imgs/fb.png" alt="facebook icon"/></a>
            <a href="https://www.pinterest.com" target="_blank"><img src="imgs/pin.png" alt="pinterest icon"/></a>
        </div>
    </div>
</footer>
        <script type="text/javascript">
            $("div#menubutton").click(function(){
                $("nav#dropdown").toggle();
            });
        </script>
</body>
</html>