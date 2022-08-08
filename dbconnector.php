
<?php
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PSWD', '');
DEFINE ('DB_SERVER', 'localhost');
DEFINE ('DB_NAME', 'mobaholder');

// ///////////////////////////////////////////////////
// Get db connection
function ConnGet() {
    // $dbConn will contain a resource link to the database
    // @ Don't display error
    $dbConn = @mysqli_connect(DB_SERVER, DB_USER, DB_PSWD, DB_NAME, 3306)
    OR die('Failed to connect to MySQL ' . DB_SERVER . '::' . DB_NAME . ' : ' . mysqli_connect_error()); // Display messge and end PHP script

    return $dbConn;
}

function GetSingleItem($dbConn, $Id)
{
    $sql = "SELECT * FROM characters where Id = ".$Id;


    return @mysqli_query($dbConn, $sql);
}

function DeleteItem($dbConn, $Id){
    //$sql = "DELETE FROM characters WHERE ".$Id;

    $query = "DELETE FROM characters WHERE ".$Id;

    $result = mysqli_query($dbConn, $query);
    $rows = $dbConn->affected_rows;

    if ($result == true) {

        return $rows;
    }
    else  {
        echo mysqli_error($dbConn);
        return false;
    }

}

function InsertItem($dbConn, $Id,$Name, $Patheon, $MeleeType, $PowerType, $Class, $Difficulty, $FavorCost, $GemsCost, $Quote){
    //$sql = "INSERT INTO characters(Id, Name, Patheon, MeleeType, PowerType, Class, Difficulty, FavorCost, GemsCost, Quote) VALUES (0,".$Name.",".$Patheon.",".$MeleeType.",".$PowerType.",".$Class.",".$Difficulty.",".$FavorCost.",".$GemsCost.",".$Quote.")";

    $sql = "INSERT INTO characters (Id, Name, Patheon, MeleeType, PowerType, Class, Difficulty, FavorCost, GemsCost, Quote) VALUES (?,?,?,?,?,?,?,?,?,?)";

    $prep = mysqli_prepare($dbConn, $sql);

    // Data format
    //    i Integers
    //    d Doubles
    //    b Blobs
    //    s Everything Else
    mysqli_stmt_bind_param($prep, "issssssiis", $Id, $Name, $Patheon, $MeleeType, $PowerType, $Class, $Difficulty, $FavorCost, $GemsCost, $Quote);

    mysqli_stmt_execute($prep);

    $affected_rows = mysqli_stmt_affected_rows($prep);
    mysqli_stmt_close($prep);

    return $affected_rows;
}

?>