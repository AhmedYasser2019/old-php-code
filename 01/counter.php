<?php
session_start();
    $_SESSION['name'] = "ahmed";
    include "c.php";
    echo "<a href = 'about.php'>ABOUT</a> ";