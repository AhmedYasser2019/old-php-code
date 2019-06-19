<?php

if($_SERVER['REQUEST_METHOD'] == "GET")
{
echo "Your username is ".$_GET['username']."<br>";
echo "Your password is ".$_GET['password']."<br>";
}
else
{
echo "Your username is ".$_POST['username']."<br>";
echo "Your password is ".$_POST['password']."<br>";
}