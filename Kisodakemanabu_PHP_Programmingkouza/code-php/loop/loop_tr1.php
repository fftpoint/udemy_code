<?php
$i = 1;
while ($i <= 9) {
    $x = $i % 2;
    if ($x == 1) {
        echo $i . PHP_EOL;
    }
    $i++;
}