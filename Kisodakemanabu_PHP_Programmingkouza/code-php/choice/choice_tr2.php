<?php
$scores = [90, 72, 58, 80];

for ($i = 0; $i < count($scores); $i++) {
    $score = $scores[$i];
    if ($scores[$i] >= 80) {
        echo $score . " : A" . PHP_EOL;
    } elseif ($scores[$i] >= 60) {
        echo $score . " : B" . PHP_EOL;
    } else {
        echo $score . " : C" . PHP_EOL;
    }
}