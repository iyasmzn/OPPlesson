<?php
namespace Vehicle\Car;

include 'Car.php';

class BMW extends Car
{
	public function __construct()
	{
		$this->brand;
		$this->color;
	}
	public $brand;
	public function setBrandName($x)
	{
		$this->brand 	=	$x;
	}
	public function output()
	{
		echo "I have a car with the brand is ".$this->brand." and the color is ".$this->color;
	}
}