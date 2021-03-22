<?php
$str = "Hyper-Text-Markup-Language";

$words = explode("-", $str);

foreach ($words as $word) {
    echo substr($word, 0, 1);
}

echo PHP_EOL;