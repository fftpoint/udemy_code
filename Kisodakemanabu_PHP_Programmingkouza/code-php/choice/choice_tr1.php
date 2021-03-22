<?php
$score = $argv[1];

if ($score >= 80) {
    echo $score . " : A" . PHP_EOL;
} elseif ($score >= 60) {
    echo $score . " : B" . PHP_EOL;
} else {
    echo $score . " : C" . PHP_EOL;
}
