<?php

namespace App\Spices;

class Salt extends Spice
{
    private string $color;

    public function __construct(string $name, string $color)
    {
        parent::__construct($name);
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}