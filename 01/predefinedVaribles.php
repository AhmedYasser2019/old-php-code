<?php
/*
super global=>
*[$GLOBALS]
كل المتغيرات ال gobal بتتخزن في اراي وبالتالي ممكن استخدمها في اي مكان تاني 
وكمان ممكن اضيف في الاراي دي متغيرات بحيث انها تبقي جلوبال


*[$_server]برده عباره عن اراي


*[$_GET]بتستقبل البيانات اللي مبعوته مع اللينك اللي بيتبعت من صفحه تانيه 
*[$_POST] زي الجيت بس مش بتبعت الداتا في اللينك
*/

$name  = "ahmed";
function printname(){
    
echo $GLOBALS["name"]."<br>";
    $GLOBALS["age"] = 21;
    
}
printname();
echo $age."<br>";

//------**----------
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['SERVER_PORT']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";

if($_SERVER['SERVER_NAME'] === "localhost")
{
echo "your local address is  127.0.0.0";
}
?>

