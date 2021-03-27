<?php
$file = "score.txt";
// $score_aray = file($file, FILE_IGNORE_NEW_LINES);
// $total = array_sum($score_aray);
// echo $total . PHP_EOL;

$handle = fopen($file, "r");

$socre_array = [];
while (($score = fgets($handle)) !== false) {
    $socre_array[] = trim($score);
}
fclose($handle);

$total = array_sum($socre_array);
echo $total;
