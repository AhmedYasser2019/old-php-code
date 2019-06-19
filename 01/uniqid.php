<?php
/*
uniqid(prefix[optional] دي عشان تضمن عدم التكرار في مكان تاني,more_Entropy[optional]عشوائي اكتر ) ; uniqe idintifir
*/
$rand = uniqid("script1_");
echo $rand."<br>";
var_dump($rand);
echo"<br>";
$rand2 = uniqid("script1_",true);
echo $rand2."<br>";
var_dump($rand2);