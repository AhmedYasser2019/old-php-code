<?php
class Device
{
    public $ram;
    public $name;
    public function __construct($na,$ra) //constructor
    {
        $this->name = $na;
        $this->ram = $ra;
        echo"Hello " .$na ." You have ".$ra. "<br>";
    }
    private function showpassword()
    {
        echo "your password is ahmed@123";
    }
    public function __call($methodname,$params) //call
    {
        echo "The Method [ " . $methodname . " ] Are Not Found Or Not Accessible <br> and its parameters => <br>";
        print_r($params)."<br>";
        
    }
    public function __get($prop)
    {
        echo "<br>The Properety [ " . $prop . " ] Are Not Found Or Not Accessible ";
        
    }
    public function __set($prop,$val)
    {
        echo "<br>The Properety [ " . $prop . " ] Are Not Found Or Not Accessible And so its value " . $val ;
        
    }
    public function __clone()
    {
        $this->name =  $this->name;
    }
        
}
class Aplle extends Device
{
    
}
$device1 = new Device("Nokia","2GB");
$iphone = new Aplle("IPHONE6s","8GB");
$iphone->sayhello("iphone6s","8GB","gold");
$iphone->showpassword();
$device1->hello;
$device1->color = "Red";
$device2 = new Device("HONOUR8","4GB");
$device3 = clone $device2;
echo"<br> Before changing";
echo "<pre>";
print_r($device2);
echo "</pre>";
echo "<pre>";
print_r($device3);
echo "</pre>";
$device2->ram = "4GB";
$device3->ram = "6GB";
echo"<br> After changing";
echo "<pre>";
print_r($device2);
echo "</pre>";
echo "<pre>";
print_r($device3);
echo "</pre>";
