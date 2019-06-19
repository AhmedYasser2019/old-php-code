<?php
session_start();//resume
    
    
    echo "HELLO ".$_SESSION['username']." AND YOUR FAVUORATE TEAM IS ".$_SESSION['favteam']."<br>";

    echo "<a href = 'page3.php'>NEXT</a>"."<br>";
    
    $_SESSION['favteam'] = "REALMADRID";