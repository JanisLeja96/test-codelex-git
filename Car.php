<?php

class Car
{
    private string $make;
    private string $numberPlate;
    private int $maxCapacity;
    private int $currentFuel;
    private int $mileage;
    private int $pin;

    public function __construct(string $make, string $numberPlate, int $maxCapacity, int $pin)
    {
        $this->make = $make;
        $this->numberPlate = $numberPlate;
        $this->maxCapacity = $maxCapacity;
        $this->currentFuel = $maxCapacity;
        $this->mileage = 0;
        $this->pin = $pin;
    }

    public function __toString()
    {
        return "{$this->make} {$this->numberPlate} fuel capacity: {$this->maxCapacity}\n";
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

    public function getMileage()
    {
        return $this->mileage;
    }

    public function increaseMileage(int $distance)
    {
        $this->mileage += $distance;
    }

    public function getPin()
    {
        return $this->pin;
    }
}

$audi = new Car('Audi', 'LV-0000', 80, 123);
$bmw = new Car('BMW', 'LV-1234', 60, 456);
$opel = new Car('Opel', 'XX-3232', 40, 000);

echo "Cars available for driving: \n";
$availableCars = [$audi, $bmw, $opel];
foreach ($availableCars as $car) {
    echo $car;
}

$choice = (int)readline('Choose which car to drive(1-3): ');
$selectedCar = $availableCars[$choice - 1];

$pin = readline("Enter PIN for {$selectedCar->getMake()}: ");
$attempts = 3;
while ($pin != $selectedCar->getPin() && $attempts > 0) {
    echo "Incorrect PIN entered! {$attempts} attempts remaining.\n";
    $attempts--;
    $pin = readline("Enter PIN: ");
}

if ($pin == $selectedCar->getPin()) {
    while ($selectedCar->getCurrentFuel() > 0) {
        $selectedCar->increaseMileage(10);
        $selectedCar->spendFuel();
        echo "{$selectedCar->getMileage()}km: {$selectedCar->getMake()} {$selectedCar->getNumberPlate()} {$selectedCar->getCurrentFuel()} liters remaining\n";
        sleep(1);
    }
}
