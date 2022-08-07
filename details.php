<?php

include_once "header.php";

?>

<?php

$servername = "localhost";

$dbUsername = "root";

$dbPass = "";

$dbName = "mobaholder";

$conn = mysqli_connect($servername, $dbUsername, $dbPass, $dbName, 3306);

$sql = 'SELECT `Id`, `Name`, `Patheon`, `MeleeType`, `PowerType`, `Class`, `Difficulty`, `FavorCost`, `GemsCost`, `Quote` FROM `characters` WHERE Id = 1';

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Id: " . $row["Id"]. " - Name: " . $row["Name"]. " - Patheon: " . $row["Patheon"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

?>





<?php 

include_once 'footer.php';
?>