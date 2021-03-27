<?php
function double($x) {
    return $x * 2;
}

$scores = [90, 72, 58];

for ($i=0; $i < count($scores); $i++) { 
    $result = double($scores[$i]);
    echo $result . PHP_EOL;
}