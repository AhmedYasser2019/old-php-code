<?php
class Mobile
{
    public static $name = "Iphone";
    public static $ram = "4GB";
    public static function sayhello()
    {
        echo "<br> HELLO<br> " ;
        
    }
    // chaining methods
    public function presspower()
    {
        echo "You pressed the power button <br>";
        return $this;
    }
    public function presshome()
    {
        echo "You pressed the home button <br>";
        return $this;
    }
    public function pressvolume()
    {
        echo "You pressed the volume button <br>";
        return $this;
    }
}
echo Mobile::$name;
$mob = new Mobile();
$mob->sayhello();
Mobile::sayhello();
Mobile::$name = "Iphone6s";
echo Mobile::$name;
//echo $mob->ram;
//chaining
$mob->presspower()->presshome()->pressvolume();