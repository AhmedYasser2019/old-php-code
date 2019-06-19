<?php
/*
setcookie("background","",time()-3600,'/'); عشان احذف ال cookie
*/
$maincolor = "#FFF";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $maincolor = $_POST["color"];//get the color from the form
    setcookie("background",$maincolor,time()+3600,'/');
}
if(isset($_COOKIE['background']))
{
    $body = $_COOKIE['background'];
}
else
{
    $body = $maincolor;
}
echo "<pre>"



?>


<html>
    <head>
        <meta charset="utf-8">
    <title>Modify Cookie</title>
    </head>
    <body style="background-color: <?php echo $body?>">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <input type="color" name="color">
            <input type="submit" value="Choose">
        </form>
        
    </body>

</html>