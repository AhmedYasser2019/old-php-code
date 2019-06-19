<?php
interface DBconnect
{
    public function getuser();
    public function getdata();
    public function showstats();
}
class MYSQL implements DBconnect
{
    public $user;
    public function getuser()
  {
      echo "SELECT * from user" . "<br>";
  }
    public function getdata()
    {
        echo "SELECT * from data " . "<br>";
    }
    public function showstats()
    {
        echo "SELECT * from stats" . "<br>";
    }
}
class Oracle implements DBconnect
{
    public $user;
    public function getuser()
  {
      echo "SHOW * from user" . "<br>";
  }
    public function getdata()
    {
        echo "SHOW * from data " . "<br>";
    }
    public function showstats()
    {
        echo "SHOW * from stats" . "<br>";
    }
    
}
$row = new MYSQL();
echo"<pre>";print_r($row);echo"</pre>";
$row->getuser();
$row->getdata();
$row->showstats();
$row = new Oracle();
echo"<pre>";print_r($row);echo"</pre>";
$row->getuser();
$row->getdata();
$row->showstats();
