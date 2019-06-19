<?php

session_start();
    if (isset($_SESSION['user']))
    {
        echo "hello ".$_SESSION['user']."you are an admin <br>";
        echo " <pre>";
        print_r($_SESSION);
        echo "</pre>";
    }
else
    {
        echo "sorry";
    }
session_unset();
session_destroy();