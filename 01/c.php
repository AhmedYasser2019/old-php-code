<?php
    if(empty($_SESSION['counter']))
    {
        $_SESSION['counter'] = 1;
    }
    else
    {
        $_SESSION['counter']++;
    }
    echo "it is viewed ".$_SESSION['counter']."Times"."<br>";