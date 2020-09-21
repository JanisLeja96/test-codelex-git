<?php

require_once 'app/Spices/Spice.php';
require_once 'app/Spices/Pepper.php';
require_once 'app/Spices/Salt.php';

use App\Spices\Salt;
use App\Spices\Pepper;

$pepper = new Pepper('Black', 'Ground');
$salt = new Salt('White salt', 'White');

echo $pepper->getName() . PHP_EOL;
echo $salt->getName();