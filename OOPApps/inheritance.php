<?php
    class Device    //super class[parent]
    {
        public $ram ='2GB';
		public $inch ='4ich';
		public $space='32GB';
		public $color='silver';
        public $name;
        
        
        public function changes($r,$i,$s,$c)
        {
            $this->ram = $r;
            $this->inch = $i;
            $this->space = $s;
            $this->color = $c;
        }
        
        public function showprice($n)
        {
            $this->name = $n;
            echo "the price of " . $this->name ." = 100$";
        }
        
    }
    
    class Aplle extends Device  //subclass [child]
    {
        public $software = 'icloud';
        public function showprice($n)   //override
        {
            $this->name = $n;
            echo "the price of " . $this->name ." = 500$";
        }
            
    }
    class Sony extends Device 
    {
        public $software = 'indroid';
        public function showprice($n)   //override 
        {
            $this->name = $n;
            echo "the price of " . $this->name ." = 300$";
        }
    }
    $mobile = new Device();
    $mobile->showprice("MOBILE");
    echo "<pre>";
    print_r($mobile);
    echo "</pre>";
    $iphone = new Aplle();
    $iphone->showprice("IPHONE");
    echo "<pre>";
    print_r($iphone);
    echo "</pre>";
    $z2 = new Sony();
    $z2->showprice("Z2");
    echo "<pre>";
    print_r($z2);
    echo "</pre>";