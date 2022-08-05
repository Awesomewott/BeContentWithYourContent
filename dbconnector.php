<?php

// Create constants
DEFINE ('DB_USER', 'phpa');
DEFINE ('DB_PSWD', 'test');
DEFINE ('DB_SERVER', 'localhost:3306');
DEFINE ('DB_NAME', 'MobaHolder');

function ConnGet() {
    // $dbConn will contain a resource link to the database
    // @ Don't display error
    $dbConn = @mysqli_connect(DB_SERVER, DB_USER, DB_PSWD, DB_NAME, 3308)
    OR die('Failed to connect to MySQL ' . DB_SERVER . '::' . DB_NAME . ' : ' . mysqli_connect_error()); // Display messge and end PHP script

    return $dbConn;
}

function MyJoinGet($dbConn) {

    //Query db for all information
    $query = "SELECT * FROM `Characters` WHERE 1";

    return @mysqli_query($dbConn, $query);
}

?>


