<?php include 'header.php'; ?>
<div id="maincontent">
<?php
$_SESSION['names'] = array();

foreach (glob("projectimgs/*.jpg") as $filename) {
  /*This gets the filenames of all the files in folder projectimgs ending with .jpg*/
	array_push($_SESSION['names'],basename($filename, ".jpg"));
  /*This created an array within the session called names from the
  name of the images without the path and without .jpg*/
    echo "<div class=\"squares\" data-name=\"" . basename($filename, ".jpg") . "\" style=\"background-image:url(projectimgs/" . basename($filename, ".jpg") . ".jpg)\" ><a href=\"#project" . basename($filename, ".jpg") . ".php\"><img class=\"imgs\" src=\"" . basename($filename, ".jpg") . "bw.jpg\" alt=\"" . basename($filename, ".jpg") . "\"/></a></div>\r\n";
  /*This echoes the whole html - for example :
  <div class="squares" data-name="animals" style="background-image:url(projectimgs/animals.jpg)">
  <a href="#projectanimals.php"><img class="imgs" src="animalsbw.jpg" alt="animals"></a></div>
  The*/
}

	/*$projects=array("bia","bisca","blog","inspire","summer","animals",);
	$plength=count($projects);
	for($x=0;$x<$plength;$x++)
	{
  		echo "<div class=\"squares\" id=\"" . $projects[$x] . "\" style=\"background-image:url(" . $projects[$x] . ".jpg)\" ><a href=\"#project" . $projects[$x] . ".php\"><img class=\"imgs\" src=\"" . $projects[$x] . "bw.jpg\" alt=\"" . $projects[$x] . "\"/></a></div>\r\n";
  	}*/
	?>

</div>
<div id="blackbcg"></div>
	<script type="text/javascript">

    	$(".squares").click(function(){
    	/*	if ($("#"+$(this).attr("id")+"cont")){
  		$("#"+$(this).attr("id")+"cont").css("display","block");
}
else{*/
        var selecteditem = $(this).attr("data-name")+"modal";
       /* if ($('#'+selecteditem).length)
          {
            $("#blackbcg").css("display","block");
            $('#'+selecteditem).css("display","block");
          }
          else
          {*/
    	       $("#blackbcg").load("project"+$(this).attr("data-name")+".php").css("display","block");
    	//}
      }
    	//}
    	);

$("#blackbcg").click(function(e){
  //if(e.target.className !== "arrows" && e.target.className !== "blackcontent" && e.target.className !== "squares" && e.target.id !== "maincontent")
  //(!$(this).hasClass("arrows") && !$(this).hasClass("maincontent") && !$(this).hasClass("maincontent")
   //{
      $("#blackbcg").css("display","none");
      $(this).children().remove();
   //}
     }
);
/*$("#blackbcg").click(function(){
    		 //$(this).css("display","none");
    		 //$("#blackbcg").remove();
    		 $("#blackbcg").css("display","none");
    	});*/
    </script>

</body>
</html>