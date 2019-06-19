<?php
session_start();
$admins = array("ahmed","omar","mohamed","nono","body");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
  $user = $_POST['username'];
    
    if(in_array($user,$admins))
    {
        $_SESSION['user'] = $user;
        echo "HELLO ".$_SESSION['user']."YOU ARE PERMITTED AS AN ADMIN <br>";
        header('REFRESH:5;URL=controlpanel.php');
    }
    else
    {
        echo "sorry you are not allowed";
    }
    
}
else
{
    echo " SOORY YOU CAN NOT GETIN IT DIRECTLY!!!";
}