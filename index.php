<?php
include_once('dbh.inc.php');


ob_start();
session_start();
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
                        <button class="details_btn" id="details_btn" value="details">
                            <a class="details_btn_a" id="" href="details.php?pid=<?php echo $rows['Id'];?>">
                                Details
                            </a>
                            </button>  
                        <?php 
                        if($_SESSION['username'] == 'Dave'){
                        ?>
                        <button value="details">
                            <a href="delete.php?pid=<?php echo $rows['Id'];?>">
                                Delete
                            </a>
                        </button>
                        <?php 
                        };
                        ?>
                    </td>
                </tr>
                <?php
                };
                ?>
            </table>
            <?php
            if($_SESSION['username'] == 'Dave'){
            ?>
            <button style="float:right; margin-top: 20px">
                <a href="AddItem.php">Add Item</a>
            </button>
            <?php
            };
            ?>
        </section>
    </div>

</body>
</html>
<?php
include_once "footer.php";
?>




