<?php
trait FingerPrint
{
    public function fingerprintfeature()
    {
        echo "This phone has fingerprint property <br>";
        return $this;
    } 
}
trait FaceDetect
{
    public function facedetectfeature()
    {
        echo "This phone has FaceDetect property <br>";
        return $this;
    }
    
}
trait ThreeDaimentions
{
    public function threeDfeature()
    {
      echo "This phone has ThreeDaimentions property <br>";
        return $this;
    }
    
}
class Iphone
{
    use FingerPrint,FaceDetect,ThreeDaimentions;

    public function sayhello()
    {
        echo "Hello Iphone from the class <br>";
        return $this;
    }
}
class Sony
{
    use FingerPrint,FaceDetect;
    public function sayhello()
    {
        echo "Hello Sony from the class <br>";
        return $this;
    }
}
class Nokia
{
    public function sayhello()
    {
        echo "Hello Nokia from the class <br>";
        return $this;
    }
}
$iphone6s = new Iphone();
$iphone6s->sayhello()->fingerprintfeature()->facedetectfeature()->threeDfeature();
echo"<pre>";print_r($iphone6s);echo"</pre>";
$z2 = new Sony();
$z2->sayhello()->fingerprintfeature()->facedetectfeature();
echo"<pre>";print_r($z2);echo"</pre>";
$nokia10 = new Nokia();
$nokia10->sayhello();
echo"<pre>";print_r($nokia10);echo"</pre>";