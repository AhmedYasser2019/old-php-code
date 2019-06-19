<?php

/*
    setcookie(name,value[optional],expire[optional],path[optional],domain[optional],secure[optional],httponly[optional]);
*/
setcookie("fb","ahmed",time()+3600,'/',"localhost");
setcookie("yt","ahmed",time()+3600,'/',"localhost");

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

if(count($_COOKIE) > 0)
    {
        echo "COOKIES ARE ENABELED";

    }
else
    {
     echo "they are not found";
    }