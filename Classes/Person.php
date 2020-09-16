<?php

class Person
{
    private string $name;
    private ?string $middleName;
    private string $surname;

    public function __construct($name, $middleName = null, $surname)
    {
        $this->name = $name;
        $this->middleName = $middleName;
        $this->surname = $surname;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getMiddleName()
    {
        return $this->middleName;
    }

    public function getSurname()
    {
        return $this->surname;
    }
}

$janis = new Person('Jānis', null, 'Leja');
$ilze = new Person('Ilze', 'Anna', 'Bērziņa');
$peteris = new Person('Pēteris', null, 'Straume');

$people = [$janis, $ilze, $peteris];

foreach ($people as $person) {
    echo "{$person->getName()} {$person ->getMiddleName()} {$person->getSurname()}";
    echo "\n";
}
