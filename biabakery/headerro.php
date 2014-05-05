<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php $document=basename($_SERVER ["SCRIPT_FILENAME"]);?>
</head>
<body>
    <header id="header">
        <a id="logoa" href="#"><img src="logo.svg" id="logo" alt="logo"/></a>
        <nav  id="desktop">
            <ul>
                <li <?php if ($document=="index.php") {
                    echo "id='active'";
                } ?>><a  href="index.php">HOME</a></li>
                <li <?php if ($document=="catalog.php") {
                    echo "id='active'";
                } ?>><a href="catalog.php">CATALOG</a></li>
                <li <?php if ($document=="order.php") {
                    echo "id='active'";
                } ?>><a href="comandaro.php">COMANDA</a></li>
                <li <?php if ($document=="aboutbia.php") {
                    echo "id='active'";
                } ?>><a href="aboutbiaro.php">DESPRE BIA</a></li>
                <li <?php if ($document=="contact.php") {
                    echo "id='active'";
                } ?>><a href="contact.php">CONTACT</a></li>
            </ul>
            </nav>
            <div id="menubutton"><a href="#"><img src="menubutton.svg" alt="menubutton" /></a></div>
    </header>
            <nav id="dropdown">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="catalog.php">CATALOG</a></li>
                <li><a href="order.php">COMANDA</a></li>
                <li><a href="aboutbia.php">DESPRE BIA</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
    </nav>
    