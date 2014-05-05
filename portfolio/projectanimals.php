<?php include 'arrows.php'; ?>
<!--<script src="modalscripts.js"></script>-->
<?php include 'modalscripts.php';?>
	<div class="blackcontent" id="animalsmodal">
		<h2>Learn the animals</h2>
<h3><strong>SKILLS:</strong> HTML5, JAVASCRIPT, PHP</h3>
<div id="description">
<p><strong>THE WEBSITE'S PURPOSE</strong> is to be educational for kids who are learning English - like digital flashcards 
with animals. When you click on an image, the name of the animal appears. It's 
a javascript function that gets all the images, puts them in an array, loops through them and on click displays 
the id of the clicked one.</p> <p><strong>TO OPTIMIZE THE HTML</strong> code I 
generate it from a php array with the animals' names. Each image has the same name as the 
corresponding div id (the animal's name) with .png at the end, and all the images 
are in the same folder. That way a new animal can be added 
by just adding its name to the array and creating a picture.</p>
<p><strong>TO MAKE THE SITE MOBILE FRIENDLY</strong>, I use PHP mobile detection and smaller images for the mobile devices. If a mobile device is
detected, the code generated contains the path of the small images. It is also fully responsive and functioning at 
<a href="http://mimmy.me/learntheanimals" target="_blank">http://mimmy.me/learntheanimals</a></p></div>
<div id="image"><a href="http://mimmy.me/learntheanimals" target="_blank"><img src="animalsscreens.png" alt="learntheanimals"/></a></div>
</div>
</div>