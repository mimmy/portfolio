<?php include 'header.php'; ?>
<div id="concactstuff">
	<DIV id="lefty">
	<h2>Contact Me!</h2>
	<p class="contactp">If you have any questions, want to see more of my work, or maybe even want to 
hire me - don‘t hesitate to contact me! I will answer as soon as possible.</p>
<form id="contactform1" action="form_handling.php" method="post">
	<label for="namename" id="namelabel">NAME/COMPANY:<span class="required">*</span></label>
	<label for="phonephone">EMAIL:<span class="required">*</span></label>
	<br>
	<input id="namename" type="text" name="name" required autofocus>

<input id="phonephone" type="email" name="email" required>
<label for="details">MESSAGE:<span class="required">*</span></label>
<textarea id="details" cols="50" rows="7" name="message" requred></textarea>
<input id="button" type="submit" value="SEND">
</form>
</DIV><img src="greyline.jpg" id="line" alt="line"/>
<div id="righty">

<h3>EMAIL:</h3>
<p>dimitrova.mariya.t@gmail.com</p>
<h3>PHONE NUMBER:</h3>
<p>+45 91 944 155</p>
<h3>ADDRESS:</h3>
<p>Spobjergvej 10, room 8,<br>
8220 Aarhus,<br>
Denmark</p>
<h3>SOCIAL MEDIA:</h3>
<p id="socialmedia"><a href="https://www.linkedin.com/profile/view?id=232783565&trk=nav_responsive_tab_profile" target="_blank">
<i class="fa fa-linkedin-square"></i></a>
<a href="https://twitter.com/mariatdimitrova" target="_blank"><i class="fa fa-twitter-square"></i></a></p></div>       
</div>
</body>
</html>
