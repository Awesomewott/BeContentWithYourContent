<?php

include_once "header.php"
?>

<div>

    <?php
    include_once "dbConnector.php";

    // Get the db connection
    $myDbConn = ConnGet();
    $dataSet = MyJoinGet($myDbConn);

    if ($dataSet){
        echo '<table align="center" cellspacing="5" cellpadding="8">
        <tr><td align="center"><b>God Name</b></td>
        <td align="center"><b>Class</b></td>';
        while($row = mysqli_fetch_array($dataSet)){
            echo '<tr><td align="center">' .
            $row['Name'] . '</td><td align="center">' .
            $row['Class'];
            echo '</tr>';
        }
        mysqli_free_result($dataSet);
    } // End if
    else {
        echo "Query failed<br />";
        echo mysqli_error($myDbConn);
    }

    echo "</Table> <br /> <br/>";

    // Always close the connection
    mysqli_close($myDbConn);
    ?>

</div>

<?php
include_once "MyFooter.php";
?>
