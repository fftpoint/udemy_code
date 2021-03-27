<?php
$score = [
    [90, 88, 80],
    [64, 72, 72],
    [90, 92, 94]
];
$file = "score.csv";

$handle = fopen($file, "w");

foreach ($score as $line) {
    // $string = implode(",", $line);
    // fwrite($handle, $string . PHP_EOL);
    fputcsv($handle, $line);
}

fclose($handle);