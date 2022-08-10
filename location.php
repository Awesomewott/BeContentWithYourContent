<?php

ob_start();
session_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();

$buffer=str_replace("%TITLE%","Location", $buffer);
echo $buffer;
?>

<h3>We are located in the U.S.A.</h3>
