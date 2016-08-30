<?php
interface Mammal{
  public function talk();
  public function walk();
}
 abstract class Person implements Mammal{
 	private $name;
 	private $age;
 	Private $gender;
 	public function __construct($name, $age, $gender)
 	{
 		$this->name=$name;
 		$this->age=$age;
 		$this->gender=$gender;
 	}
 	public function GetName()
 	{
 		return $this->name;
 	}
 	public function GetAge()
 	{
 		return $this->age;
 	}
 	public function GetGender()
 	{
 		return $this->gender;
 	}
 	public abstract function PrintInfo();



 }
 abstract class Animal implements Mammal{
	private $name;
 	private $age;
 	Private $gender;
 	public function __construct($name, $age, $gender)
 	{
 		$this->name=$name;
 		$this->age=$age;
 		$this->gender=$gender;
 	}
 	public function GetName()
 	{
 		return $this->name;
 	}
 	public function GetAge()
 	{
 		return $this->age;
 	}
 	public function GetGender()
 	{
 		return $this->gender;
 	}
 	public abstract function PrintInfo();

 }
 

 class Students extends Person
 {
 	public function talk(){
 		echo "- I can talk ";
 	}
 	public function walk(){
 		echo "- I can walk ";
 	}
 	public function PrintInfo()
 	{
 		echo $this->GetName()." ".$this->GetAge(). " ".$this->GetGender();
 	}

 }
 class Dolphin extends Animal
 {
 	public function talk(){
 		echo "- I can't talk  ";
 	}
 	public function walk(){
 		echo "- I can walk  ";
 	}
 	public function PrintInfo()
 	{
 		echo $this->GetName()." ".$this->GetAge(). " ".$this->GetGender();
 	}


 }
 $dolphin = new Dolphin("pee",28,"male");
 $pesho = new Students("pesho",12,"male");

 $dolphin->PrintInfo(); 
 $dolphin->walk();
 $dolphin->talk();
 $pesho->PrintInfo(); 
 $pesho->walk();
 $pesho->talk();


?>