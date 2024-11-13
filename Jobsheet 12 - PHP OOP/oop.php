<?php
// 1.1 -> Upgrade to 1.4
class Car
{
    public $brand, $color;

    public function __construct($brand, $color)
    {
        $this->brand = $brand;
        $this->color = $color;
    }
    public function __getBrand()
    {
        return $this->brand;
    }
    public function __getColor()
    {
        return $this->color;
    }
    public function __setBrand($brand)
    {
        $this->brand = $brand;
    }
    public function __setColor($color)
    {
        $this->color = $color;
    }
}

$car = new Car("Toyota", "Blue");

echo "Brand: " . $car->__getBrand() . "<br>";
echo "Color: " . $car->__getColor() . "<br>";

$car->__setColor("Red");

echo "Updated Color: " . $car->__getColor() . "<br>";

// 1.2
class Animal
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function eat()
    {
        echo $this->name . " is eating<br>";
    }

    public function sleep()
    {
        echo $this->name . " is sleeping<br>";
    }
}
class Cat extends Animal
{
    public function meow()
    {
        echo $this->name . " is meowing<br>";
    }
}
class Dog extends Animal
{
    public function bark()
    {
        echo $this->name . " is barking<br>";
    }
}

$cat = new Cat("Whiskers");
$dog = new Dog("Buddy");

$cat->eat();
$dog->sleep();

$cat->meow();
$dog->bark();

// 1.3 -> Upgrade to 1.6
interface Shape
{
    public function calculateArea();
}
interface Color
{
    public function getColor();
}

class Circle implements Shape, Color
{
    private $radius, $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function calculateArea()
    {
        return pi() * $this->radius * $this->radius;
    }

    public function getColor()
    {
        return $this->color;
    }
}

// class Rectangle implements Shape, Color
// {
//     private $width;
//     private $height;

//     public function __construct($width, $height)
//     {
//         $this->width = $width;
//         $this->height = $height;
//     }

//     public function calculateArea()
//     {
//         return $this->width * $this->height;
//     }
// }

$circle = new Circle(5, "Blue");

echo "Circle Area: " . $circle->calculateArea() . "<br>";
echo "Circle Color: " . $circle->getColor() . "<br>";
