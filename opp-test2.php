<?php
abstract class Vehicle
{
  protected $brand;
  protected $model;
  protected $price;

  public function GetBrand()
 	{
 		return $this->brand;
 	}
 	public function GetModel()
 	{
 		return $this->model;
 	}
 	public function GetPrice()
 	{
 		return $this->price;
 	}


abstract function startEngine();
abstract function stopEngine();
abstract function printData();
}
class Car extends Vehicle
{
	public $horsePower;
	public $weight;
	public $color;
	public function __construct($brand,$model,$price,$hp,$weight,$color){
		$this->brand=$brand;
		$this->model=$model;
		$this->price=$price;
		$this->horsePower=$hp;
		$this->weight=$weight;
		$this->color=$color;
	}

	public function GetHorsePower()
 	{
 		return $this->horsePower;
 	}
 	public function GetWeight()
 	{
 		return $this->weight;
 	}
 	public function GetColor()
 	{
 		return $this->color;
 	}
 	public function startEngine(){
 		echo"engine start";
 	}
 	public function stopEngine(){
 		echo"engine stop";
 	}
 	public function printData(){
 		echo $this->GetBrand()." ".$this->GetModel()." ".$this->GetPrice()." ".$this->GetHorsePower()." ".$this->GetWeight()." ".$this->GetColor();
 	}
}
class Bus extends Vehicle
{
	public $seat;
	public $disableSeats ;
	public $totalCapasity;
	public function __construct($brand,$model,$price,$seat,$disableSeats,$totalCapasity){
		$this->brand=$brand;
		$this->model=$model;
		$this->price=$price;
		$this->seat=$seat;
		$this->disableSeats=$disableSeats;
		$this->totalCapasity=$totalCapasity;
	}

	public function GetSeat()
 	{
 		return $this->seat;
 	}
 	public function GetDisabledSeat()
 	{
 		return $this->disableSeats;
 	}
 	public function GetTotalCapacity()
 	{
 		return $this->totalCapasity;
 	}
 	public function startEngine(){
 		echo"engine start";
 	}
 	public function stopEngine(){
 		echo"engine stop";
 	}
 	public function printData(){
 		echo $this->GetBrand()." ".$this->GetModel()." ".$this->GetPrice()." ".$this->GetSeat()." ".$this->GetDisabledSeat()." ".$this->GetTotalCapacity();
 	}
}
$golf = new Car("vw","golf",1998,90,2000,"red");
$bmc = new Bus("vw","golf",1998,90,2000,"red");



?>