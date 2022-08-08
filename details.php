<?php

ob_start();
session_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();

$buffer=str_replace("%TITLE%","Details", $buffer);
echo $buffer;

include_once "dbconnector.php";

//$myJSON = "";
$myGet = "";
$row = null;

if (array_key_exists("pid", $_GET) == TRUE)
{
    $dbconn = ConnGet();

    $myGet = $_GET["pid"];

    $dataSet = GetSingleItem($dbconn, $myGet);

    if ($dataSet){
        if($row = mysqli_fetch_array($dataSet)) {
            $myJSON = "Name: ".$row['Name']. "</br>Patheon: ".$row['Patheon']. "</br>Melee Type: ".$row['MeleeType']."</br>Power Type: ".$row['PowerType']. "</br>Class: ".$row['Class']. "</br>Melee Type: ".$row['MeleeType']. "</br>Difficulty: ".$row['Difficulty']. "</br>Favor Cost: ".$row['FavorCost']. "</br>Gems Cost: ".$row['GemsCost']. "</br>Quote: ".$row['Quote'];
        };
    };
    mysqli_close($dbconn);
}
    echo $myJSON;
?>










<?php

include_once 'footer.php';
?>