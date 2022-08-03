<?php
$MyArray = array('home' => 'index.php', 'About' => 'about.php', 'Login' => 'login.php', 'List' => 'details.php');

foreach($MyArray as $Page => $Link)
{
    echo "<a href=\"" . $Link . "\">" . $Page . "</a>";
}
?>