<?php

class Buyer
{
    private string $name;
    private float $money;
    private array $products;

    public function __construct()
    {
        $file = fopen('src/Buyer.csv', 'r');
        $contents = fgetcsv($file);
        $this->name = $contents[0];
        $this->money = $contents[1];
        $this->products = [...array_slice($contents, 2)];
    }

    public function getMoney(): float
    {
        return $this->money;
    }

    public function decreaseMoney(float $amount): void
    {
        $this->money -= $amount;
        $file = fopen('src/Buyer.csv', 'w+');
        $fields = [$this->name, $this->money];
        fputcsv($file, $fields);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function addToOwned(Product $product)
    {
        $this->products[] = $product->getName();
        $file = fopen('src/Buyer.csv', 'w+');
        $fields = [$this->name, $this->money, ...$this->products];
        fputcsv($file, $fields);
    }

    public function getOwnedProducts()
    {
        return $this->products;
    }
}