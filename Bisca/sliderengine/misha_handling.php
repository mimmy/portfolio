<?php

if($_POST){
	
$to = "mui.na.skari4ka.f@gmail.com";
$subject = "Bisca";
$message = $_POST["message"];
$from = $_POST["email"];
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?>