<?php

$file = fopen('randomNumber.txt', 'a+');
$number = random_int(1, 1000);
$average = 0;
if (filesize('randomNumber.txt') > 0) {
    $array = explode(PHP_EOL, fread($file, filesize('randomNumber.txt')));
    $average = number_format(array_sum($array) / count($array), 2);
}

fwrite($file, $number . PHP_EOL);
echo "Number: {$number}\n";
echo "AVG: {$average}\n";
fclose($file);