<?php
function search($scores, $target) {
    for ($i=0; $i < count($scores); $i++) { 
        // if ($target == $scores[$i]) {
        //     return true;
        // }

        if ((int)$target === $scores[$i]) {
            return true;
        }
    }
    return false;
}

$scores = [90, 72, 58, 80, 66, 50];
$target = $argv[1];

$found = search($scores, $target);
if ($found == true) {
    echo "Found" . PHP_EOL;
} else {
    echo "Not Found" . PHP_EOL;
}