<?php

session_start();
    echo "HELLO ".$_SESSION['name']."HOW ARE YOU ?"."<br>";
    echo "YOU VIEWED THIS PAGE ".$_SESSION['counter']."TIMES"."<br>";
    echo "<a href = 'counter.php'>HOME</a>";


    include "logout.php";