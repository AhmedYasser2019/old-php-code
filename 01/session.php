<?php

session_start(); //start or resume
$_SESSION['username'] = "ahmed";
$_SESSION['favteam'] = "elahly";

echo "<a href='page2.php'>NEXT</a> ";
?>
