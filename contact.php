<?php

ob_start();
session_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();

$buffer=str_replace("%TITLE%","Contact", $buffer);
echo $buffer;
?>
<?php
echo 'Hello Contact'
?>