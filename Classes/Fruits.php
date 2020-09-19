<?php

abstract class Fruit
{
    public int $weight;

    public function __construct(int $weight) {
        $this->weight = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getName()
    {
        return get_class($this);
    }
}

class Apple extends Fruit
{
    public function __construct(int $weight)
    {
        parent::__construct($weight);
    }
}

class Orange extends Fruit
{
    public function __construct(int $weight)
    {
        parent::__construct($weight);
    }
}

class Pear extends Fruit
{
    public function __construct(int $weight)
    {
        parent::__construct($weight);
    }
}

class FruitCollection
{
    private array $fruits = [];

    public function add(Fruit $fruit)
    {
        $this->fruits[] = $fruit;
    }

    public function getFruits()
    {
        return $this->fruits;
    }
}

$fruitCollection = new FruitCollection();
$fruitCollection->add(new Apple(40));
$fruitCollection->add(new Pear(30));
$fruitCollection->add(new Orange(20));

foreach($fruitCollection->getFruits() as $fruit) {
    echo "{$fruit->getName()} weight: {$fruit->getWeight()}\n";
}