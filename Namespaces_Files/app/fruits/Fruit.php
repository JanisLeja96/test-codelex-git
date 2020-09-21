<?php

namespace App\fruits;

class Fruit
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}