<?php
$scores = [
    "english" => [90, 72, 58],
    "math" => [80, 82, 78],
    "science" => [94, 66, 80]
];

foreach ($scores as $subject => $score) {
    $sum_score = array_sum($score);
    echo $subject . ':' . $sum_score . PHP_EOL;
}