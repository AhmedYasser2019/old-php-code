<?php
session_start();//resume

echo "welldone".$_SESSION['username']."<br>";
echo "YOUR FAVUORITE TEAM BECOMES ".$_SESSION['favteam']."<br>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
echo "<a href = 'logout.php'>EXIT</a> ";