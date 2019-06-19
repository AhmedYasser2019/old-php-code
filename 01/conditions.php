<?php
$ticketprice = 500;
if($ticketprice>400 )
{
    echo "your discount about ".$ticketprice." is 5%";
}
elseif($ticketprice>500)
{
        echo "your discount about ".$ticketprice." is 10%";

}
else
{
        echo "you have no discount";

}