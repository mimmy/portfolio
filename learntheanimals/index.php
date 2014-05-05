<!DOCTYPE html>
<html>
<head>
	<title>Learn the animals</title>
	<link type="text/css" rel="stylesheet" href="Design.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<div id="contain">
	<div id="logo"></div>

	<?php
	/*Some code to detect if the site is being visited from a mobile device or not*/
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
	/*To make the code shorter, more simple and to make it easier to add new animals,
	I generate the divs and their background from an array of animals.
	The id of the div is generated from the name of the animal in the array.
	Also the image should be named with one of the array objects and .png.
	That way if we want a new animal in the website, we just have to add a new array object and
	an image with a corresponding name in the corresponding folder.*/
	$animals=array("dog","cat","elephant","lion","monkey","fish","tiger","bear","horse","mouse","bird","pig","cow","penguin",);
	$alength=count($animals);
	/*we loop through the array, and we check if we have reached the end of the array.
	If we have, we echo in the html a div for every object from the array.*/
	for($x=0;$x<$alength;$x++)
	{

		/*for the mobile devices, the html loads the images from the folder "smalls",
		where the images are smaller than the ones for the desktop*/
if ($mobile) {
	$foldername="smalls/"; //small pictures 
}else{ 
 $foldername=""; //desktop
} 
  		echo "<div class=\"box\" id=\"" . $animals[$x] . "\" style=\"background-image:url(" . $foldername . $animals[$x] . ".png)\" ></div>";
  	}
	?>
</div>

<script>
window.onload = function() {
var coolstuff = document.getElementsByClassName('box');
Array.prototype.forEach.call(coolstuff,function(stuff) {
	stuff.onclick=function(){
		console.log(stuff.innerHTML.length);
		if (stuff.innerHTML.length == 0 || stuff.innerHTML.length == 1)
	{ 
		stuff.innerHTML='<p>'+stuff.id+'</p>';
		console.log(stuff);
	}
	else
	{
		stuff.innerHTML='';
		console.log('empty');
	}
	};

}); 
/*for(var i = 0; i < coolstuff.length; i++) {
            var coolstuff1 = coolstuff[i];
            coolstuff1.onclick=function(misha)

{	console.log(misha.id);
	console.log(misha.innerHTML.length);
	if (misha.innerHTML.length == 0 || misha.innerHTML.length == 1)
	{ 
		misha.innerHTML='<p>'+misha.id+'</p>';
		console.log(misha);
	}
	else
	{
		misha.innerHTML='';
		console.log('empty');
	}
	}*/
	
	/*if (i%2 == 0)
	{
//document.write("dog");
//var asd=document.getElementById(misha);
misha.innerHTML='<p>'+misha.id+'</p>';
	}
	else {
		misha.innerHTML='';
	}
	i++;
}*/
}
</script>
</body>

<footer id=foot>
<p id="footfoot">A website by Mariya Dimitrova</p>
</footer>

</html>

