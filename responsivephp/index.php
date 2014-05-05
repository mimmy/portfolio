<?php if (stristr($_SERVER['HTTP_USER_AGENT'],'Android') || 
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
 echo '<div id="content"><div id="stupidpictures"><img class="smalls" src="imgs/1mob.jpg" alt="slide"/><br><img class="smalls" class="smalls" src="imgs/mob2.jpg" alt="slide"/><img class="smalls" src="imgs/mob3.jpg" alt="slide"/></div></div>';
}
else { 
 include 'header.php';
 echo '<div id="content"><div id="stupidpictures"><img class="smalls" src="imgs/1mob.jpg" alt="slide"/><br><img class="smalls" class="smalls" src="imgs/mob2.jpg" alt="slide"/><img class="smalls" src="imgs/mob3.jpg" alt="slide"/></div></div>';

}  ?>
	<?php include 'footer.php'; ?>