<?php


class Store
{
    private Stock $stock;
    private Buyer $buyer;

    public function __construct(Stock $stock)
    {
        $this->stock = $stock;
        $this->buyer = new Buyer();
    }

    public function getStock(): array
    {
        return $this->stock->getStock();
    }

    public function sell(string $product): void
    {
        if ($this->findByName($product)) {
            $productToSell = $this->findByName($product);

            if ($productToSell->getAmount() > 0) {
                if ($this->buyer->getMoney() >= $productToSell->getPrice()) {
                    $productToSell->decrementAmount();
                    $this->buyer->decreaseMoney($productToSell->getPrice());
                    $this->buyer->addToOwned($productToSell);
                } else {
                    throw new Exception("{$this->buyer->getName()} does not have enough money!");
                }
            } else {
                throw new Exception('Not enough units in store!');
            }
        } else {
            throw new Exception('Product not found');
        }
    }

    public function findByName(string $name): ?Product
    {
        foreach ($this->getStock() as $product) {
            if ($product->getName() == $name) {
                return $product;
            }
        }
        return null;
    }

    public function getBuyer(): Buyer
    {
        return $this->buyer;
    }

}