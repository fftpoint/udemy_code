<?php
$file = "heloo.txt";
$handle =@fopen($file, "r");

if ($handle === false) {
    die("can't open file");
}

while (($line = fgets($handle)) !== false) {
    echo $line;
}

fclose($handle);