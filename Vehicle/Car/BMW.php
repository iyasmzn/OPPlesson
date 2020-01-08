<?php
namespace Vehicle\Car;

class BMW
{
	public function __construct()
	{
		$this->brand;
		$this->color;
	}
	public $brand;
	public $color;
	public function setBrandName($x)
	{
		$this->brand 	=	$x;
	}
	public function setColor($y)
	{
		$this->color 	=	$y;
	}
	public function output()
	{
		echo "I have a car with the brand is ".$this->brand." and the color is ".$this->color;
	}
}