<?php
class Eployee
{
	public $name;
	public $age;
	public $adress;
	public $salary ;
	public $tax;
	public $overtime;
	public $overtimeRate;
	public $abbsent;
	public $abbsentRate;
	public function calculateovertime()
	{
		# code...
		return $this->overtime * $this->overtimeRate;
	}
}
$emp1= new Eployee();
$emp1->name="Amed yaser Elbaz";
$emp1->age=22;
$emp1->adress="elmohandsen";
$emp1->salary = 3000;
$emp1->overtime = 20;
$emp1->overtimeRate = 15;
$emp1->calculateovertime();
echo $emp1->name." overtime is ".$emp1->calculateovertime()." L.E ";
echo "<pre>";
var_dump($emp1);
echo "</pre>";
?>