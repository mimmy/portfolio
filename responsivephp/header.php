<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php $document=basename($_SERVER ["SCRIPT_FILENAME"]);?>
<meta charset="UTF-8">
<title>Bia Bakery - We Sweeten Your Days!</title>
</head>
<body>
    <header id="header">
        <a id="logoa" href="index.php"><img src="logo.svg" id="logo" alt="logo"/></a>
        <nav  id="desktop">
            <ul>
                <li <?php if ($document=="index.php") {
                    echo "id='active'";
                }
                else {echo "class='inactive'";} ?>><a  href="index.php">HOME</a></li>
                <li <?php if ($document=="catalog.php") {
                    echo "id='active'";
                }
                else {echo "class='inactive'";}  ?>><a href="catalog.php">CATALOG</a></li>
                <li <?php if ($document=="order.php") {
                    echo "id='active'";
                }
                else {echo "class='inactive'";} ?>><a href="order.php">ORDER</a></li>
                <li <?php if ($document=="aboutbia.php") {
                    echo "id='active'";
                }
                else {echo "class='inactive'";}  ?>><a href="aboutbia.php">ABOUT BIA</a></li>
                <li <?php if ($document=="contact.php") {
                    echo "id='active'";
                }
                else {echo "class='inactive'";}  ?>><a href="contact.php">CONTACT</a></li>
            </ul>
            </nav>
          </header>
    