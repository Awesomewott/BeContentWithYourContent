<?php

ob_start();
session_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();

$buffer=str_replace("%TITLE%","History", $buffer);
echo $buffer;
?>

<h3>This project was started on about 2 weeks ago as an idea. Now it has data and functionality for getting information on MOBA Characters.</h3>
<h3>The 4 of us desgined and created this website for all of these characters so that everyone can get new knowledge!</h3>
