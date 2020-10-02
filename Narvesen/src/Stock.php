<?php


class Stock
{
    private array $stock = [];

    public function add(Product $product)
    {
        $this->stock[] = $product;
    }

    public function getStock()
    {
        return $this->stock;
    }
}