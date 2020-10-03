<?php

foreach (glob('src/*.php') as $file) {
    require_once $file;
}

$stock = new Stock();
$stock->add(new Product('Bread', 0.80, 10));
$stock->add(new Product('Cheese', 2, 8));
$stock->add(new Product('Milk', 1, 20));
$stock->add(new Product('Ketchup', 1.70, 15));
$stock->add(new Product('Sausage', 1, 0));
$stock->add(new Product('iPhone', 9999, 10));

$store = new Store($stock);

echo 'Available products: ' . PHP_EOL . PHP_EOL;
foreach ($store->getStock() as $product) {
    echo $product . PHP_EOL;
}

$loop = true;
while ($loop) {
    echo PHP_EOL;

    echo '1. Buy product' . PHP_EOL;
    echo '2. View purchased products' . PHP_EOL;
    echo '3. Exit' . PHP_EOL;

    $choice = (int)readline('Enter your choice (1, 2, 3): ');

    switch ($choice) {
        case 1:
            $productToBuy = readline('Enter product name: ');
            try {
                $store->sell($productToBuy);
            } catch (Exception $e) {
                echo $e->getMessage() . PHP_EOL;
            }
            break;
        case 2:
            if (count ($store->getBuyer()->getOwnedProducts()) > 0) {
                echo PHP_EOL . 'Purchased products:' . PHP_EOL;
                foreach ($store->getBuyer()->getOwnedProducts() as $product) {
                    echo $product . PHP_EOL;
                }
            } else {
                echo PHP_EOL;
                echo "Buyer hasn't purchased anything yet";
            }
            echo PHP_EOL;

            break;
        case 3:
            $loop = false;
            break;
        default:
            echo 'Invalid choice entered!';
            break;
    }
}




