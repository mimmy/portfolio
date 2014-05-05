<?php
session_start();

if($_POST){
$_SESSION["form_send"]="form sent!";
$to = "grouptrei@gmail.com";
$subject = "for BIA bakery";
$message = 'from: ' . $_POST["name"] . ' ' . $_POST["lastname"] . "\xA" . 'order: ' . $_POST["message"];
$from = $_POST["email"];
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
}
header('Location: http://mimmy.me/biabakery/contact.php');
?>
