<?php  
/*
1-for
syntax

for(ex1;ex2;ex3)
{
stmts
}
*/
for($i = 1 ;$i <= 10 ; $i++)
{
    echo $i."<br>";
}

$courses = array("HTML","CSS","JS","JQ","PHP","LRVL");
 
echo "<ul>";
for($s = 0;$s <= count($courses)-1 ; $s++)
{
    echo "<li>".$courses[$s]."</li>";
}
echo "</ul>";

/*
2-while loop

*/
$ii = 1;
while($ii <= 15)
{
    echo $ii."<br>";
    $ii++;
}


/*
    3-foreach
    *for indexed array
    
    foreach($array as $value)
    {
    code
    }
    *for associative array
    foreach ($array as $key => value)
    {
    code
    }
*/

$names = array("Ahmed","Omar","Manso","Tefa","Ramzy");

foreach($names as $value)
{
  echo $value."<br>";  
    
}

$Anames = array("A" => "Ahmed",
                "B" => "Omar",
                "C" => "Manso",
                "D" => "Tefa",
                "E" => "Ramzy");

foreach($Anames as $key => $value)
{
  echo $key." => ".$value."<br>";  
    
}