<?php
abstract class Shape
{
    public abstract function calculateArea();

    public function getName()
    {
        return get_class($this);
    }
}

class Triangle extends Shape
{
    private int $base;
    private int $height;

    public function __construct(int $base, int $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return ($this->base * $this->height) / 2;
    }

    public function getBase()
    {
        return $this->base;
    }

    public function getHeight()
    {
        return $this->base;
    }

}

class Square extends Shape
{
    private int $length;

    public function __construct(int $length)
    {
        $this->length = $length;
    }

    public function calculateArea()
    {
        return $this->length * $this->length;
    }

    public function getLength()
    {
        return $this->length;
    }
}

class Circle extends Shape
{
    private int $radius;

    public function __construct(int $radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * $this->radius * $this->radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

}

$shapes = [
    new Circle(5),
    new Square(5),
    new Triangle(4, 2)
];

foreach ($shapes as $shape) {
    echo "{$shape->getName()} area = {$shape->calculateArea()}\n";
}