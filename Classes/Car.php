<?php

class Car
{
    private string $name;
    private int $fuelCapacity;

    public function __construct(string $name, int $fuelCapacity)
    {
        $this->name = $name;
        $this->fuelCapacity = $fuelCapacity;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getFuelCapacity()
    {
        return $this->fuelCapacity;
    }
}

class Audi extends Car
{
    private int $exhaustCount;

    public function __construct(string $name, int $fuelCapacity, int $exhaustCount)
    {
        parent::__construct($name, $fuelCapacity);
        $this->exhaustCount = $exhaustCount;
    }

    public function getExhaustCount()
    {
        return $this->exhaustCount;
    }
}

class BMW extends Car
{
    private int $seatCount;

    public function __construct(string $name, int $fuelCapacity, int $seatCount)
    {
        parent::__construct($name, $fuelCapacity);
        $this->seatCount = $seatCount;
    }

    public function getSeatCount()
    {
        return $this->seatCount;
    }
}

class Opel extends Car
{
    private int $speakerCount;

    public function __construct(string $name, int $fuelCapacity, int $speakerCount)
    {
        parent::__construct($name, $fuelCapacity);
        $this->speakerCount = $speakerCount;
    }

    public function getSpeakerCount()
    {
        return $this->speakerCount;
    }
}

$cars = [
    new Audi('Audi', 70, 3),
    new BMW('BMW', 100, 5),
    new Opel('Opel', 85, 8)
];

foreach ($cars as $car) {
    echo "Name: {$car->getName()} Fuel capacity: {$car->getFuelCapacity()} liters ";
    if ($car instanceof Audi) {
        echo "Exhaust count: {$car->getExhaustCount()}";
    } else if ($car instanceof BMW) {
        echo "Seat count: {$car->getSeatCount()}";
    } else if ($car instanceof Opel) {
        echo "Speaker count: {$car->getSpeakerCount()}";
    }
    echo "\n";
}