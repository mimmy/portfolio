<?php
session_start();

if($_POST){
$_SESSION["form_send"]="form sent!";
$to = "dimitrova.mariya.t@gmail.com";
$subject = "INTERNSHIP";
$message = 'from: ' . $_POST["name"] . "\xA" . $_POST["message"];
$from = $_POST["email"];
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
}
header('Location: http://mimmy.me/portfolio/');
?>
