<?php
/*
string functions

1-Explode(seperator,string,limit[optional]);

2-ُImplode(seperator,array);
join(seperator[optional],array);


3- 
str_split(string,length);
chunk_split(string,length[default value 76],end[optianal,default value /r/n]);

4- 
str_replace(search,replace,string,count[optinal]);

5-

str_repeat(string,repeats)
str_shuffle(string)
strlen(string)

6-
addslashes(string)
stripslashes(string)
strip_tags(string,allow)

7-
strtolower(string);
strtoupper(string);

8-
*trim(string,charlist)تقليم(بيشيل الاضافات دي =>)
*ltrim()
*rtrim()
[
\0 null
\n newline
\t tap
\x0B vertical tap
\r 
" " space
]
9-

str_word_count(string,format,charlist(بيعتبرها كلمه كامله));

10-

parse_str(string,array[optional])

11-
nl2br(string,true/false[optional]) new line to break tag <br>

12-
*strpos(string,search,offset[optional])ببحث عن كلمه  في سترينج و الاوفست دي البدايه
*stripos(string,search,offset[optional])بس مش casesestiveببحث عن كلمه  في سترينج و الاوفست دي البدايه
*strrpos(string,search,offset[optional])بيبحث من اليمين بس الاندكس زي ما هوه
*strripos(string,search,offset[optional])التنين مع بعض

13-

*strstr(string,search,befor search[optinnal])
*stristr(string,search,befor search[optinnal]) no casesensetive
*strchar(string,search,befor search[optinnal]) the same with strstr

14-
*strcmp(string1,string2)بيقارن الاتنين 
0=الاتنين قد بعض 
+ الاول اكبر
- الاول اصغر

*strncmp(string1,string2, length[عدد الحروف اللي هقارنها من الاتنين])

*
strrev(string)بتعكس الكلمه

15-
substr(string,start,length[optional])بتاخد قطعه من الكلمه الاصليه

16-
substr_count(string,substring,start,length)
substr_compare(string1,string2,startposition1,length,case)
*/


$str = "I am ahmed yasser elbaz";
echo $str."<br>";

$arr = explode(" ",$str);

echo "<pre>";
print_r($arr);
echo "</br>";

$arr = explode(" ",$str,-1);

echo "<pre>";
print_r($arr);
echo "</br>";

$arr = explode(" ",$str,0);

echo "<pre>";
print_r($arr);
echo "</br>";

$arr = explode(" ",$str,2);

echo "<pre>";
print_r($arr);
echo "</br>";

//---------------*************-------------------------
$emps = array("ahmed","omar","eslam");
$str1 = implode(" and ",$emps);
echo "The Employees are ".$str1."<br>";
$str1 = join($emps);
echo "The Employees are ".$str1."<br>";
//--------------***********--------
$str2 = "ABCDEFGHIJKLM'N'O'P'QRSTUVWXYZ"."<br>";
echo "<pre>";
print_r(str_split($str2,2));
echo "</br>";
echo "<pre>";
print(chunk_split($str2,2,"!"));
echo "</pre>";
//-------***-----------

$str3 = str_replace("ahmed","ammar",$str,$i);
echo $str3." and it repeats ".$i."<br>";
$str3 = str_replace(array("ahmed","elbaz"),"ammar",$str,$i);
echo $str3." and it repeats ".$i."<br>";
$str3 = str_replace(array("ahmed","elbaz"),array("mohamed","ahmed"),$str,$i);
echo $str3." and it repeats ".$i."<br>";

//---**--------------

echo str_repeat($str,3)."<br>";
echo str_shuffle($str);
echo "<br>".strlen($str)."<br>";

//-------**********------------

echo addslashes($str2)."<br>";
echo stripslashes(addslashes($str2));
echo strip_tags($str2,"<br>");
//---------************---------
$strtrimm = "\t \t i love php \x0B <br>";
echo var_dump($strtrimm);
echo $strtrimm;
$trimed = trim($strtrimm);
echo var_dump($trimed);
echo $trimed;
//------------**************--------------
$str4 = "i love php somuch";
echo $str4."<br>";
$str4count = str_word_count($str4);
echo $str4count."<br>";
$str4count = str_word_count($str4,1);
echo "<pre>";
print_r($str4count);
echo "</pre>";
//----------*******-------------
$str5 = "name=ahmed&age=21&address=domiat&team=elahly";
parse_str($str5);
echo $name."<br>";
parse_str($str5,$arr1);
echo "<pre>";
print_r($arr1);
echo "</pre>";
//-------------*******------------

echo $str4;
$char = strstr($str4,"php",false);
echo "<br>".$char."<br>";

//--------**-----------
echo strcmp("a","uhhdujkhwdecjjkdc")."<br>";
//-----***------
$str6 = "hello iam very happy as i study";
echo substr($str6,4);


