<?php

class Car
{
    private string $make;
    private string $numberPlate;
    private int $maxCapacity;
    private int $currentFuel;

    public function __construct(string $make, string $numberPlate, int $maxCapacity)
    {
        $this->make = $make;
        $this->numberPlate = $numberPlate;
        $this->maxCapacity = $maxCapacity;
        $this->currentFuel = $maxCapacity;
    }

    public function getMake()
    {
        return $this->make;
    }

    public function getNumberPlate()
    {
        return $this->numberPlate;
    }

    public function getCurrentFuel()
    {
        return $this->currentFuel;
    }

    public function spendFuel()
    {
        $this->currentFuel -= 1;
    }
}

$myCar = new Car('Audi', 'LV-0000', 80);
$mileage = 0;
while ($myCar->getCurrentFuel() > 0) {
    $mileage += 10;
    if ($mileage % 10 == 0) {
        $myCar->spendFuel();
        echo "{$mileage}km: {$myCar->getMake()} {$myCar->getNumberPlate()} {$myCar->getCurrentFuel()} liters remaining\n";
    }
}