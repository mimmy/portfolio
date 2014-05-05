<script type="text/javascript">

  $("div.blackcontent").click(function(e) {
        e.stopPropagation();
        /*stopPropagandation makes the bubbling stop
        http://javascript.info/tutorial/bubbling-and-capturing
        bubbling is when i click on the child but it still triggers the parent functions*/
   });

$(".arrows").click(function(e){
    	/*	if ($("#"+$(this).attr("id")+"cont")){
  		$("#"+$(this).attr("id")+"cont").css("display","block");}
else{*/
        e.stopPropagation();
    	$("#blackbcg").load("project"+$(this).attr("data-name")+".php").css("display","block");
             //loading the previous or next page with ajax without reloading the page
    	}
    	//}
    	);

        $("body").keyup(function(event){
    if(event.keyCode == 37){
        $("#leftarrow").click();
    }
    else if(event.keyCode == 39){
        $("#rightarrow").click();
    }
    else if (event.keyCode == 27){
        $("#blackbcg").click();
    };
});

        $("#blackbcg").scroll(function(){
   if ($(this).scrollTop() > 173) {
    var topp = $(this).scrollTop()-173;
  $('#image').css("margin-top", topp);
  console.log(topp);
   }
  console.log ($(this).scrollTop());
});

/*$("#blackbcg").click(function(){
    		 //$(this).css("display","none");
    		 //$("#blackbcg").remove();
    		 $("#blackbcg").css("display","none");
    	});*/
    </script>