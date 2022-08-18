<?php
include_once "menu.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta content="text/html; charset=ISO-8859-1"  http-equiv="content-type">
  <title>Moba Library - <?php
                            echo $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);                
                        ?>'</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css" />
    <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type" />
    <title>Moba Library - %TITLE% </title>
    <link rel="stylesheet" type="text/css" href="/menu.css" />
</head>

<script>
    function toggleTheme() {
        var theme = document.getElementsByTagName('link')[0];

        if (theme.getAttribute('href') == 'stylesheet.css') {
            theme.setAttribute('href', 'stylesheet2.css');
        }
        else if (theme.getAttribute('href') == 'stylesheet2.css') {
            theme.setAttribute('href', 'stylesheet3.css');
        }
        else if (theme.getAttribute('href') == 'stylesheet3.css') {
            theme.setAttribute('href', 'stylesheet.css');
        }
    }
</script>

<h1>Smite Library Website - %TITLE%</h1>                                                                                                        
</html>




