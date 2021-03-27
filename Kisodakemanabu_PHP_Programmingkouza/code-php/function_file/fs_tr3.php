<?php
$file = "score.csv";

// $handle = fopen($file, "r");

// $total = 0;
// while (($line_array = fgetcsv($handle))) {
//     $total += array_sum($line_array);
// }
// fclose($handle);
// echo $total;

$lines = file($file, FILE_IGNORE_NEW_LINES);

$total = 0;
foreach ($lines as $line) {
    $line_array = explode(",", $line);
    $sum_line = array_sum($line_array);
    $total += $sum_line;
}

echo $total;