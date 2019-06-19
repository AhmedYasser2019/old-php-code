<?php
date_default_timezone_set('Africa/Cairo');

/*
date(format,timestamp);
ال date بيعمل فورمات ل time معين
*/

// echo date_default_timezone_get()."<br>";

echo " the current date is " .date('Y-m-d h:i:s')."<br>";
$nextmonth = time()+(31*24*60*60);
echo "the date of the next monnth is  ".date('Y-m-d h:i:s',$nextmonth)."<br>";
echo date('l jS \of F Y h:i:s a')."<br>"."<hr>";
/*
strtotime(date,timestamp[now])
*/
$newway = strtotime('+1 day 2 week 1 month 1 year');//+ x[day/week/month/year]
echo date('Y-m-d h:i:s',$newway)."<br>";
$newway = strtotime('-1 day -2 week -1 month -1 year');//- x[day/week/month/year]
echo date('Y-m-d h:i:s',$newway)."<br>";
$newway = strtotime('last day');
echo date('Y-m-d h:i:s',$newway)."<br>";
$newway = strtotime('next day');
echo date('Y-m-d h:i:s',$newway)."<br>";


