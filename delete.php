<?php
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
