<?php
function calc($price) {
    $result = $price * 1.08;
    return $result;
}

$price1 = calc(100);
echo $price1 . PHP_EOL;

$price2 = calc(1000);
echo $price2 . PHP_EOL;