<?php
require 'Apple.php';
require 'Sony.php';
require 'LG.php';


$iphone = new Apple\CreatePhone();
$iphone->sayhello();
print_r($iphone);
echo"<br>";
$z2 = new Sony\CreatePhone();
$z2->sayhello();
print_r($z2);
echo"<br>";
$lg = new LG\CreatePhone();
$lg->sayhello();
print_r($lg);