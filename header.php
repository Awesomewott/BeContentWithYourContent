<!DOCTYPE html>
<html lang="en">

<head>
  <meta content="text/html; charset=ISO-8859-1"  http-equiv="content-type">
  <title>Moba Library - <?php
                            echo $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);                
                        ?>'</title>
  <link rel="stylesheet" type="text/css"  href="/Style.css">
</head>
<body>


<h1><?php $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
          echo "The current page name is: ".$curPageName;  
          echo "</br>";  ?></h1>
<?php
include_once "menu.php"
?>