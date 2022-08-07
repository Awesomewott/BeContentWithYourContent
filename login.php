<?php
session_start();
include_once "header.php"
?>

<?php
function WriteButton($name, $text)
{
    echo "<button name=\"". $name ."\" >" . $text . "</button>";
}
function WriteInput($name, $type){
    echo "<input type=\"". $type ."\" name=\"". $name ."\" />";
}

function redirect() {
    ob_start();
    header('Location: about.php');
    ob_end_flush();
    die();
}

$User = "Dave";
$Pass = "test123";

$Input1 = $_POST["Username"];
$Input2 = $_POST["Password"];

$ErrorMessage = "";


if(array_key_exists("SubmitButton", $_POST))
{
    if($Input1 == $User && $Input2 == $Pass){
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = 'Dave';
        redirect();
    }
    else{
        if($Input1 != "" || $Input2 != ""){
            $ErrorMessage = "Your Username or Password is incorrect";
        }
    }
}
if(array_key_exists("Logout", $_POST)){
    unset($_SESSION['valid']);
    unset($_SESSION['timeout']);
    unset($_SESSION['username']);
}

if($_SESSION['username'] == "Dave" || $_SESSION['valid'] == true){
    $ErrorMessage = "Congrats, your logged in";
}

?>
<form method="post">

    <h2>Admin Login</h2>
    <br/>
    <?php echo $ErrorMessage ?>
    <br/>
    <br/>
    <br/>
    <label>Username:</label>
    <?php WriteInput("Username", "text"); ?>
    <br/><br/>

    <label>Password:</label>
    <?php WriteInput("Password", "text"); ?>
    <br/><br/>
   
     <?php WriteButton("SubmitButton", "Submit"); ?>
</form>
<br/>
<br/>
<br/>
<form method="post">
    <?php WriteButton("Logout", "Logout")?>
</form>