<?php

namespace App\Spices;

class Pepper extends Spice
{
    private string $type;

    public function __construct(string $name, string $type)
    {
        parent::__construct($name);
        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }
}