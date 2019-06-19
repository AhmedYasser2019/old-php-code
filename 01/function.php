<?php

/*
syntax:
function identifir(args)
{
code
}
*/

function printName()
{
    echo "Hi Ahmed"."<br>";
    
}


printName();

//------------------********--------------
//function with parameters
function calculateAgeInDays($name,$age)
{
    echo "the age of ".$name." is ".($age*365)." days"."<br>"; 
}
calculateAgeInDays("Ahmed yasser",21);

//function with return 

function mul($num)
{
    return $num*$num;
    echo "مش هيطبع حاجه لانه بعد ال return";
}

echo mul(11);
echo mul(10)."<br>";
/////////////////-----------*******------/////////////
// advanced
/*
لو انا عامل  optional في  ال args بحطها في الاخر انما الاجباري بحطها في الاول
EX:
*/
function sayHi($name,$age="UNKNOWN")
{
    return "Hi ".$name." your age is ".$age."<br>";
}
sayHi("ahmed",21);
sayHi("mohamed");

function setFrame($element)
{
    $frame = "<div class = 'nice_frame'>";
    $frame .= $element;
    $frame .= "</div>";
    
    
    return $frame;
}
$myElement = setFrame(sayHi("ahmed",21));



?>
<html>
<head>
    <meta charset = "utf-8">
    <title>Advanced</title>
    <style>
        .nice_frame {
            padding:10px;
            text-align:center;
            border-radios:10px;
            background-color:#EEE;
            color: #0083e8;
            margin:15px;
            font-family:Arial;
            
            
                
                
        }
        
    </style>
    </head>
    <body>
      <?php echo $myElement ?>  
    </body>
</html>


