<?php
/*
exit();
die(); زيها بالظبط
*/
$file = "ahmed.txt";//مش موجود

$handle = @ fopen($file,'r')
    or exit("unable to find ".$file);

echo "now you can read the file";//مش هتظهر عشان ال exit