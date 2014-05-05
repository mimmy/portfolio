<?php
session_start();

if($_POST){
$_SESSION["mishana_send"]="mishana send!";
$to = "mui.na.skari4ka.f@gmail.com";
$subject = "Bisca";
$message = $_POST["message"];
$from = $_POST["email"];
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
}
header('Location: http://mimmy.me/Bisca/contact.php');
?>