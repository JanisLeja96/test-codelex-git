<?php

require_once 'File.php';
require_once 'NumberGenerator.php';

$file = new File('randomNumber.txt');
$number = NumberGenerator::getNumber();
$file->writeToFile($number);
$average = $file->getAverage();

echo "Number: {$number}\n";
echo "AVG: {$average}\n";

