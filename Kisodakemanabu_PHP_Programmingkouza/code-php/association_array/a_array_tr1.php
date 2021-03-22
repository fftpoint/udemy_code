<?php
$score = [
    "english" => 90,
    "math" => 88,
    "science" => 80
];

$sum = 0;
foreach ($score as $subject => $score) {
    $sum += $score;
};

echo $sum . PHP_EOL;