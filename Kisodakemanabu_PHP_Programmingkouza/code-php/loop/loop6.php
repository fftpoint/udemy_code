<?php
for ($i = 0; $i < 10; $i++) {
    $x = $i % 2;
    if ($x == 1) {
        continue;
    }
    echo $i . PHP_EOL;
}
echo "end". PHP_EOL;