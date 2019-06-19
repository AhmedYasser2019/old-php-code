<?php
	/** #11 - Methods with Arguments Training
	*   #12 - Encapsulation
	*/
	class AppleDevice
	{
        //properties
		public $ram ='2GB';
		public $inch ='4ich';
		public $space='32GB';
		public $color='silver';
        private $lock;
        
        
        //methods
        public function changes($r,$i,$s,$c)
        {
            $this->ram = $r;
            $this->inch = $i;
            $this->space = $s;
            $this->color = $c;
        }
        //encapsulation
        public function changelock ($lo){
            $this->lock = sha1($lo);
            
        }
        /*
		public $ownername ;
        const OWNERCHARS = 7;
        
		
		
		public function getspecification()
		{
			echo "the ram of this mob is ". $this->ram . "<br>";

		}
		public function setownername()
		{
			if (strlen($this->ownername) < self::OWNERCHARS) {
				# code...
				echo "the ownername must be more than 7 character";
			}
			else{
				# code...
				echo "valid ownername";
			}
		}
        */
	}

	$iphone6s = new AppleDevice();
    $iphone6s->ram = "4GB";
    $iphone6s->inch = "4inch";
    $iphone6s->space = "64GB";
    $iphone6s->color = "gold";
    $iphone6s->changelock("ahmed@123");

    $iphone7s = new AppleDevice();
    $iphone7s->ram = "8GB";
    $iphone7s->inch = "6inch";
    $iphone7s->space = "64GB";
    $iphone7s->color = "white";
    
    echo "before change";
    echo "<pre>";
        var_dump($iphone6s);
    echo "</pre>";
    echo "<pre>";
        var_dump($iphone7s);
    echo "</pre>";
    echo "after changes";
    $iphone6s->changes("6GB","8inch","132GB","gold");
    $iphone7s->changes("8GB","8inch","132GB","white");
     echo "<pre>";
        var_dump($iphone6s);
    echo "</pre>";
    echo "<pre>";
        var_dump($iphone7s);


/*
	$iphone6s->getspecification();
	$iphone6s->ownername="ahmed elbaz";
	$iphone6s->setownername();
*/