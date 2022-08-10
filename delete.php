<?php

ob_start();
session_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();

$buffer=str_replace("%TITLE%","Delete", $buffer);
echo $buffer;

include_once "dbconnector.php";

//Delete's Selected Item - WIP
if ((array_key_exists("pid", $_GET) == TRUE) ) {
    // Check key for Int (TODO)
    $dbConn = ConnGet();
    $myGet = $_GET["pid"];

    $rows = DeleteItem($dbConn, $myGet);

    echo "item Has Been Deleted at Id =".$_GET["pid"];

    mysqli_close($dbConn);
};
?>
</ br>
<a href="index.php">return to homepage</a>
