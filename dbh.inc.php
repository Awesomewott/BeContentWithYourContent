<?php

$servername = "pi@pi-CMundy";

$dbUsername = "phpa";

$dbPass = "test";

$dbName = "mobaholder";

$conn = mysqli_connect($servername, $dbUsername, $dbPass, $dbName, 3306);

$sql = "SELECT * FROM characters";

$result = $conn->query($sql);

$conn->close();

?>


