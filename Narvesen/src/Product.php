<?php


class Product
{
    private string $name;
    private float $price;
    private int $amount;

    public function __construct(string $name, float $price, int $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function __toString()
    {
        return $this->name . ' '
            . PriceFormatter::format($this->price) . ' '
            . NumberFormatter::format($this->amount) . ' ';
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function decrementAmount()
    {
        $this->amount--;
    }


}