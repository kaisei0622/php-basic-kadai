<?php
class Food
{
	private $name;
	private $price;

	public function show_price(string $price)
	{
		echo $this->price . "\n";
	}

	public function __construct(string $name, string $price)
	{
		$this->name = $name;
		$this->price = $price;
	}
}

class Animal
{
	private $name;
	private $height;
	private $weight;

	public function show_height(string $height)
	{
		echo $this->height . "\n";
	}

	public function __construct(string $name, string $height, string $weight)
	{
		$this->name = $name;
		$this->height = $height;
		$this->weight = $weight;
	}
}
$food = new Food('potato', 250);
$animal = new Animal('dog', 60, 5000);

print_r($food);
print_r($animal);

$food->show_price(250);
$animal->show_height(60);
