<?php

/*
-indexed array
$a1 = array("a","b","c");
-associative array

*the key must be uniqe
$a2 = array("A" => "ahmed","B" => "mohamed");
-multidimetional array
syntax:
array(

array(e1,e2),
array(e3,e4),

);
*/

$diet = array(
    "Sat" => array("A","B","C" ),
    "Sun" => array("D","E","F" ),
    "Mon" => array("G","H","I"),
    "Tue" => array("J","K",
                   
                   array("a" => "10%",
                         "b" => "40%",
                         "c" => "70%"))
    
    
);

echo "<pre>";

print_r($diet);

echo"</pre>";
echo "<br>".$diet["Tue"][2]["a"]."<br>";


/*Array Methodes
1-Search [in_array("element","array","true/false عشان ال identical")]
         [array_search("element","array","true/false عشان ال identical")]  بترجع الاندكس 
         [array_key_exists("element","array")]ودي بتتعامل مع الassociative 

2-Add item
*array_push(array_name,val1,val2);
*array_unshift(array_name,val1,val2);

3-Remove item
*array_pop(array-name);بتشيل عنصر من اخر المصفوفه 
*array_shift(array-name);بتشيل عنصر من اول المصفوفه 

4- arraysort (idexed)

*sort(array-name);/sort(array-name,sortingType);
*rsort(array-name);/rsort(array-name,sortingType); ودي بتعكس

5- arraysort (associative)

*asort(array-name);/asort(array-name,sortingType);وده بيرتب حسب ال value
*arsort(array-name);/arsort(array-name,sortingType); ودي بتعكس
*ksort(array-name);/ksort(array-name,sortingType);وده بيرتب حسب ال key
*krsort(array-name);/krsort(array-name,sortingType); ودي بتعكس 

6- reverse & shuffle
*array_reverse(array_name,preserve[optional]===>>>بيحافظ علي الانديكس بتاعه)
*shuffle(array_name);بيرتبها  random

7-array fillودي بتملي المصفوفه 
$arr = array_fill(index,number,value);

8- array sum ودي بتجمع عناصر لااللمصفوفه وبيتغاضاي عن ال string

9- array random ودي بتطلع عدد معين من المصفوفه randomly
بس المصفوفه اللي بترجع دي عباره عن random indexes

array_rand(array_name,number);

10- array uniqe
بيشيل العناصر المتكرره وبيسيب اول عنصر متكرر بس

array_unique(array-name);

*/
$langs = array("HTML","CSS","JS","JQ","PHP","LRVL");
echo "<pre>";
print_r($langs);
echo "</pre>";

array_push($langs,"CSS3","HTML5");
array_unshift($langs,"C++");

echo "<pre>";
print_r($langs);
echo "</pre>";

echo "<br>";



echo array_pop($langs);
echo "<pre>";
print_r($langs);
echo "</pre>";

echo array_shift($langs);
echo "<pre>";
print_r($langs);
echo "</pre>";
//-------------------**************--------------

sort($langs,SORT_STRING);
echo "<br>"."sorted array";

echo "<pre>";
print_r($langs);
echo "</pre>";

rsort($langs);
echo "<br>"."sorted array";

echo "<pre>";
print_r($langs);
echo "</pre>";

$a2 = array("A" => "ahmed","B" => "mohamed","C" => "Omar");


echo "<br>"."sorted array";

echo "<pre>";
print_r($a2);
echo "</pre>";

arsort($a2);
echo "<br>"."sorted array";

echo "<pre>";
print_r($a2);
echo "</pre>";

shuffle($langs);
echo "<pre>";
print_r($langs);
echo "</pre>";


$randomkey = array_rand($langs,3);
echo "<pre>";
print_r($randomkey);
echo "</pre>";

echo $langs[$randomkey[0]]."<hr>";
echo $langs[$randomkey[1]]."<hr>";
echo $langs[$randomkey[2]]."<hr>";


    
    
