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
}
else { 
 include 'header.php'; //large pictures 
}  ?>
<br>
<div id="yolo"></div>
    <div id="content">
    	<div class="catalogcake"><img src="imgs/amandina.jpg" alt="amandina"/><p>Amandina - 25dkk/pc</p></div>
    	<div class="catalogcake"><img src="imgs/cremsnit.jpg" alt="cremsnit"/><p>Cremsnit - 30dkk/pc</p></div>
    	<div class="catalogcake"><img src="imgs/boema.jpg" alt="boema"/><p>Boema - 20dkk/pc</p></div>
    	<div class="catalogcake"><img src="imgs/profiterol.jpg" alt="savarina"/><p>Savarina - 25dkk/pc</p></div>
    	<div class="catalogcake"><img src="imgs/cartof.jpg" alt="cartof"/><p>Cartof - 20dkk/pc</p></div>
    	<div class="catalogcake"><img src="imgs/diplomat.jpg" alt="diplomat"/><p>Diplomat - 30dkk/pc</p></div>


        <div class="catalogcake"><img src="imgs/carpati.jpg" alt="carpati"/><p>Carpati - 30dkk/pc</p></div>
        <div class="catalogcake"><img src="imgs/chocolateeclair.jpg" alt="chocolateeclair"/><p>Choco Eclair - 25dkk/pc</p></div>
        <div class="catalogcake"><img src="imgs/vanillaeclair.jpg" alt="vanillaeclair"/><p>Vanilla Eclair - 25dkk/pc</p></div>
        <div class="catalogcake"><img src="imgs/amandinamini.jpg" alt="amandinamini"/><p>Amandina Mini - 30dkk</p></div>
        <div class="catalogcake"><img src="imgs/tiramisu.jpg" alt="tiramisu"/><p>Tiramisu - 30dkk/pc</p></div>
        <div class="catalogcake"><img src="imgs/chocolatecookies.jpg" alt="chocolatecookies"/><p>Choco Cookies - 120dkk/kg</p></div>
    	
    	<div></div>
    	<script type="text/javascript">
    	$(".catalogcake > img").click(function(){
    		 $("#yolo").load("incl/"+$(this).attr("alt")+".php").css("display","block");
    	});

$("#yolo").click(function(){
    		 $(this).css("display","none");
    		 $("#blackbcg").remove();
    	});

    	</script>
    </div>

    <?php include 'footer.php'; ?>