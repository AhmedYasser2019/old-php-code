<?php
echo"hi ahmed elbaz";
$lessonName = "concatenation";
$homePage = "php_".$lessonName;
$heading = "try and try then try";
$languages = "<li>PHP</li>";
$languages .= "<li>JS</li>";
$languages .= "<li>HTML</li>";
$languages .= "<li>CSS</li>";
?>
<html>
  
  <head>
    <title><?php echo"$homePage"?></title></head>
  <body>
    <h1><?php echo"$heading"?></h1>
    are you ready?
    <br>
    <b><?php echo"Hello"." PHP" ?></b>
    <hr>
    <h2>The Languages I Love</h2>
      <ui>
        <?php echo"$languages"?>
      </ui>
    
  </body>
</html>