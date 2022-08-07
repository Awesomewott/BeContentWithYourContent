<?php

include_once "header.php";
include_once "dbh.inc.php";
?>



<?php
while ($rows = $result->fetch_assoc());
{
?>
    <tr>
       <td>
         <?php echo $rows['Id'];?>
       </td>
    </tr>
<?php
}
?>










<?php

include_once 'footer.php';
?>