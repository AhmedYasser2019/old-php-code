<?php
//arthmetic operators [+,-,*,/,%]
$var1 = 20;
$var2 = 5;

echo $var1 + $var2."<br>";

echo $var1 - $var2."<br>";

echo $var1 * $var2."<br>";

echo $var1 / $var2."<br>";

echo $var1 % $var2."<br>";

// phpinfo();


// assignment operator [=]
$name = "ahmed";
$name .= " yasser";
$name .= "elbaz";
echo $name;

$var1 +=5;
$var1 -=5;
$var1 *=5;
$var1 /=5;

/*comparison operators 
[==] equal
[!=,<>] not equal
[===] identical
[!==] not identical
[<]
[<=]
[>]
[>=]
*/

$a = 10;
$b = "10";
if($a == $b)
{
    echo "they are equals"."<br>";
}
/*increment&decrement operators
[++]
[--]


*/
echo $a."<br>";

echo ++$a."<br>";

echo $a++."<br>";
/*
logical operators
[and,&&(the right)]
[or,||(the right)]
[xor] only one condition proved
[!]
*/
if($var1==10 and $var2==20)
{
echo "done";
}
else{
echo "oops <br>";
}
/*
string operator

[.]
[.=]
*/
echo " Hi "."Ahmed"."<br>";
$name1 = "ahmed";
$name1 .= "yasser";
echo $name1;
/*
 [@]error control operator بيعمل ignore لل error
*/
echo "------------------//-------------------- <br>";
$file = @fopen("meshmawgod.txt","r") or die(" this file is not found <br>");

