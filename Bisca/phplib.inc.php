<?php

function footer()
{
    $document=get_DocumentInfo();
    $last_mod=get_Doctime($document);
    $content='© Bisca a/s | Ahornvej 1 | 4780 Stege | Tlf. 72 11 00 00 | info@bisca.com • Last update: '.$last_mod;
    return $content;
}

function get_DocumentInfo()
{
    return $_SERVER["SCRIPT_FILENAME"];
}

function get_DocTime($currentDocument)
{
    $last_mod=filemtime($currentDocument);
    return date("j/m/y h:i", $last_mod);
}

?>
