<?php
function repeat($word, $times) {
    $result = "";
    for ($i=0; $i < $times; $i++) { 
        $result .= $word;
    }
    return $result;
}

$hello2 = repeat("Hello", 2);
echo $hello2 . PHP_EOL;

$World3 = repeat("World", 3);
echo $World3 . PHP_EOL;