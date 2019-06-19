<?php
$input = $_POST['txt'];
$options = array(
    'options' => array('min_range' => 1,'max_range' => 100),
    'flags' => FILTER_FLAG_ALLOW_HEX
);
//echo filter_var($string,FILTER_SANITIZE_STRING);
if(filter_var($input,FILTER_VALIDATE_INT,$options) !== FALSE)
{
    echo "good ".$input." is between  1 and 100"."<br>";
}
else
{
    echo " sorry ".$input." is not 1 and 100 <br>";
}