<?php

abstract class Device
{
    
    abstract public function sayhello($n);
    abstract public function checkperformance();
        
    
}
class Aplle extends Device
{
    public $user;
    public function sayhello($x)
    {
       $this->user = $x;
        echo "Hello " . $x;
    }
    public function checkperformance()
    {
        echo "Performance is good !!";
    }
    
}
class Sony extends Device
{
    public $user;
    public function sayhello($y)
    {
        $this->user = $y;
        echo "Hello " . $y;
    }
    public function checkperformance()
    {
        echo "Performance is good !!";
    }
    
}
$iphone = new Aplle();
echo"<pre>";
print_r($iphone);
echo"</pre>";
$iphone->sayhello("Apple user");
echo "<br>";
$iphone->checkperformance();
$z2 = new Sony();
echo"<pre>";
print_r($z2);
echo"</pre>";
$z2->sayhello("Sony user");
echo "<br>";
$z2->checkperformance();