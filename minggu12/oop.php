<?php
class Carr
{
    public $brand;

    public function startEngine()
    {
        echo "Engine started!";
    }
}

$car1 = new Carr();
$car1->brand = "Toyota";

$car2 = new Carr();
$car2->brand = "Honda";

$car1->startEngine();
echo $car2->brand;
echo "<br><br>";

//1.2 inheritace
class Animal
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function eat()
    {
        echo $this->name . " is eating.<br>";
    }

    public function sleep()
    {
        echo $this->name . " is sleeping.<br>";
    }
}

class Cat extends Animal
{
    public function meow()
    {
        echo $this->name . " says meow!<br>";
    }
}

class Dog extends Animal
{
    public function bark()
    {
        echo $this->name . " says woof!<br>";
    }
}


$cat = new Cat("Whiskers");
$dog = new Dog("Buddy");

$cat->eat();
$dog->sleep();

$cat->meow();
$dog->bark();

echo "<br><br>";

// 1.3 polymorphism
interface Shape 
{
    public function calculateArea();
}
class Circle implements Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}
class Rectangle implements Shape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}
function printArea(Shape $shape)
{
    echo "Area: " . $shape->calculateArea() . "<br>";
}
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);
printArea($circle);
printArea($rectangle);
echo "<br><br>";

// 1.4 encapsulation

class car
{
    private $model;
    private $color;

    public function __construct($model, $color)
    {
        $this->model = $model;
        $this->color = $color;
    }
    public function getModel()
    {
        return $this->model;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getColor()
    {
        return $this->color;
    }
}

$car = new car("Toyota", "Blue");

echo "Model: " . $car->getModel() . "<br>";
echo "Color: " . $car->getColor() . "<br>";

$car->setColor("Red");

echo "Update Color: " . $car->getColor() . "<br>";

echo "<br><br>";

// 1.5 abstraction
abstract class Shapee
{
    abstract public function calculateArea();
}

class Circlee extends Shapee
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

class Rectanglee extends Shapee
{
    private $width;
    private $height;


    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

$circle = new Circlee(5);
$rectangle = new Rectanglee(4, 6);

echo "Area of Circle: " . $circle->calculateArea() . "<br>";
echo "Area of Rectangle: " . $rectangle->calculateArea() . "<br>";
echo "<br><br>";

// 1.6 interface
interface Shappe
{
    public function calculateArea();
}

interface Color
{
    public function getColor();
}

class Circcle implements Shappe, Color
{
    private $radius;
    private $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function getColor()
    {
        return $this->color;
    }
}

$circle = new Circcle(5, "Blue");

echo "Area of Circle: " . $circle->calculateArea() . "<br>";
echo "Color of Circle: " . $circle->getColor() . "<br>";
echo "<br><br>";

// 1.7 constructor
class Caar
{
    private $brand;

    public function __construct($brand)
    {
        echo "A new car is created.<br>";
        $this->brand = $brand;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function __destruct()
    {
        echo "The car is destroyed.<br>";
    }
}

$car = new Caar("Toyota");

echo "Brand: " . $car->getBrand() . "<br>";
echo "<br><br>";

// 1.8 access modifiers untuk encapsulation 
class Animall
{
    public $name;
    protected $age;
    private $color;

    public function __construct($name, $age, $color)
    {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }

    public function getName()
    {
        return $this->name;
    }

    protected function getAge()
    {
        return $this->age;
    }

    private function getColor()
    {
        return $this->color;
    }

    // Metode publik untuk mengakses properti protected dan private
    public function getAgePublic()
    {
        return $this->getAge();
    }

    public function getColorPublic()
    {
        return $this->getColor();
    }
}

$animal = new Animall("Dog", 3, "Brown");

echo "Name: " . $animal->getName() . "<br>";
echo "Age: " . $animal->getAgePublic() . "<br>";
echo "Color: " . $animal->getColorPublic() . "<br>";

?>