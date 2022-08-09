<?php
include_once('dbh.inc.php');

ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();

$buffer=str_replace("%TITLE%","Home", $buffer);
echo $buffer;

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <div>
        <section>
            <table class="table_sec" id="table_sec">

                <tr>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Patheon</th>
                    <th>MeleeType</th>
                    <th>PowerType</th>
                    <th>Class</th>
                    <th>Difficulty</th>
                    <th>Favor Cost</th>
                    <th>Gems Cost</th>
                    <th>Quote</th>
                    <th>Action</th>
                </tr>

                <?php
                while ($rows = $result->fetch_assoc())
                {
                ?>

                <tr>
                    <td>
                        <?php echo $rows['Id'];?>
                    </td>
                    <td>
                        <img src="data:image/jpeg;base64, <?php echo base64_encode( $rows['Image'] ); ?>" />
                    </td>
                    <td>
                        <?php echo $rows['Name'];?>
                    </td>
                    <td>
                        <?php echo $rows['Patheon'];?>
                    </td>
                    <td>
                        <?php echo $rows['MeleeType']; ?>
                    </td>
                    <td>
                        <?php echo $rows['PowerType']; ?>
                    </td>
                    <td>
                        <?php echo $rows['Class']; ?>
                    </td>
                    <td>
                        <?php echo $rows['Difficulty']; ?>
                    </td>
                    <td>
                        <?php echo $rows['FavorCost']; ?>
                    </td>
                    <td>
                        <?php echo $rows['GemsCost']; ?>
                    </td>
                    <td>
                        <?php echo $rows['Quote']; ?>
                    </td>
                    
                    <td>
                        <button class="details_btn" id="details_btn" name="id" value="details">
                            
                            <a href="details.php">Details</a>

                        </button>
                        <button class="delete_btn" id="delete_btn" value="delete">Delete</button>
                    </td>
                </tr>
                <?php
                };
                ?>
            </table>
        </section>
    </div>

    <section>
        <div class="admin_sec" id="admin_sec">
            <div class="add_sec" id="add_sec">

                <form method="post">
                    <p>
                        Image Address:
                        <input type="text" name="Id" size="25" value="" />
                    </p>
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
                        <input type="text" name="Gems Cost" size="25" value="" />
                    </p>
                    <p>
                        Quote:
                        <input type="text" name="Quote" size="25" value="" />
                    </p>
                    <p>
                        <input type="submit" name="Submit" value="Add" />
                    </p>
                </form>
            </div>
        </div>

    </section>
    
</body>
</html>
<?php
include_once "footer.php";
?>




