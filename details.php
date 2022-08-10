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


//Gets the Single Item
if (array_key_exists("pid", $_GET) == TRUE)
{
    $dbconn = ConnGet();

    $myGet = $_GET["pid"];

    $dataSet = GetSingleItem($dbconn, $myGet);

    if ($dataSet){
        if($row = mysqli_fetch_array($dataSet)) {
            $myJSON = "Name: ".$row['Name']. "</br>Patheon: ".$row['Patheon']. "</br>Melee Type: ".$row['MeleeType']."</br>Power Type: ".$row['PowerType']. "</br>Class: ".$row['Class']."</br>Difficulty: ".$row['Difficulty']. "</br>Favor Cost: ".$row['FavorCost']. "</br>Gems Cost: ".$row['GemsCost']. "</br>Quote: ".$row['Quote'];
        };
    };
    mysqli_close($dbconn);
}
echo $myJSON;
?>

<?php
include_once "dbconnector.php";
//Updates Selected Item
if (array_key_exists('Submit', $_POST)) {
    // Validate data

    if ((array_key_exists('Name', $_POST))&& (array_key_exists('Image', $_POST))  && (array_key_exists('Patheon', $_POST))  && (array_key_exists('MeleeType', $_POST))  && (array_key_exists('PowerType', $_POST))  && (array_key_exists('Class', $_POST))  && (array_key_exists('Difficulty', $_POST)) && (array_key_exists('FavorCost', $_POST)) && (array_key_exists('GemsCost', $_POST))  && (array_key_exists('Quote', $_POST))) {

        $dbConn = ConnGet();
        $myGet = $_GET["pid"];

        $rows = MyCellUpdate($dbConn, $_POST["Name"],$_POST["Image"], $_POST["Patheon"], $_POST["MeleeType"], $_POST["PowerType"], $_POST["Class"], $_POST["Difficulty"], $_POST["FavorCost"], $_POST["GemsCost"], $_POST["Quote"], $myGet);

        mysqli_close($dbConn);
    }
}

?>

<section>
    <div class="admin_sec" id="admin_sec">
        <div class="add_sec" id="add_sec">
            <h3 style="color: white">Edit Current Item:</h3>
            <form method="post">
                <p>
                    Name:
                    <input type="text" name="Name" size="25" value="" />
                </p>
                <p>
                    Patheon:
                    <input type="text" name="Patheon" size="25" value="" />
                </p>
                <p>
                    Melee Type:
                    <input type="text" name="MeleeType" size="25" value="" />
                </p>
                <p>
                    Power Type:
                    <input type="text" name="PowerType" size="25" value="" />
                </p>
                <p>
                    Class:
                    <input type="text" name="Class" size="25" value="" />
                </p>
                <p>
                    Difficulty:
                    <input type="text" name="Difficulty" size="25" value="" />
                </p>
                <p>
                    Favor Cost:
                    <input type="text" name="FavorCost" size="25" value="" />
                </p>
                <p>
                    Gems Cost:
                    <input type="text" name="GemsCost" size="25" value="" />
                </p>
                <p>
                    Quote:
                    <input type="text" name="Quote" size="25" value="" />
                </p>
                <p>
                    <input type="submit" name="Submit" value="Edit" />
                </p>
            </form>
        </div>
    </div>
</section>

<?php
include_once 'footer.php';
?>