<?php

/*require_once 'app/Spice.php';
require_once 'app/Spices/Pepper.php';
require_once 'app/Spices/Salt.php';
*/

require_once 'app/Spice.php';

foreach (glob("app/Spices/*.php") as $filename)
{
    require_once $filename;
}

use App\Spices\Salt;
use App\Spices\Pepper;
use App\Spices\Oregano;

$pepper = new Pepper('Black', 'Ground');
$salt = new Salt('White salt', 'White');
$oregano = new Oregano('Oregano', 30);

echo $pepper->getName() . PHP_EOL;
echo $salt->getName() . PHP_EOL;
echo $oregano->getAmount();