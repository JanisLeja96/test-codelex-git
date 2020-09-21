<?php

namespace App\Spices;

class Oregano extends Spice
{
    private int $amount;

    public function __construct(string $name, int $amount)
    {
        parent::__construct($name);
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }
}