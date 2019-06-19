<?php
/*
    filter_var(varible,filter_type,options)
    $options = array(
        'options' => array(),
        'flags' => 
    );
*/
foreach(filter_list() as $filter)
{
    echo $filter."<br>";
}


?>

<form action="chk.php" method = "post">
    <input type="text" name="txt">
    <input type="submit" value="send">
</form>