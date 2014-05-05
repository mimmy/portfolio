<?php
session_start();

if($_POST){
$_SESSION["form_send"]="form send!";
$to = "grouptrei@gmail.com";
$subject = "Order for Bia bakery";
$message = 'From: ' . $_POST["name"] . ' ' . $_POST["lastname"] . "\xA" . 'Delivery address: ' . $_POST["address"] . "\xA" . 'Order: ' . "\xA" . $_POST["message"];
$from = $_POST["email"];
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
}
header('Location: http://mimmy.me/biabakery/order.php');
?>