<?php

$var1 = "ahmed elbaz"; //[1]string
$var2 = 100;//[2]integer
$var3 = true;//[3]boolean
$var4 = 5.6;//[4]floatingوممكن تبقي double
$var5 = array(
"A" => "ahmed",
"B" => "nono",
"C" => "omar"    
);//[5]array
$var6 = null;//[6]null
class book {
    function book(){
        $this->genre = "adventure";
    } 
}
$var7 = new book();//[7]object
$var8 = fopen('index.php','r');//[8]resource
//-------دول الاساسيين لسه في غيرهم  بس فس وقتهم----

echo"<h2>data type</h2> ";

echo gettype($var1)."<br>";
echo gettype($var2)."<br>";
echo gettype($var3)."<br>";
echo gettype($var4)."<br>";
echo gettype($var5)."<br>";
echo gettype($var6)."<br>";
echo gettype($var7)."<br>";
echo gettype($var8)."<br>";

echo"<h2>variable dump</h2>";

var_dump($var1);echo"<br>";
var_dump($var2);echo"<br>";
var_dump($var3);echo"<br>";
var_dump($var4);echo"<br>";
var_dump($var5);echo"<br>";
var_dump($var6);echo"<br>";
var_dump($var7);echo"<br>";
var_dump($var8);echo"<br>";
?>