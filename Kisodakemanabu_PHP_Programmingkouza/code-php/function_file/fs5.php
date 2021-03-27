<?php
$file = "hello.txt";
$handle = fopen($file, "r");

while (($line = fgets($handle)) !== false) {
    echo $line;
}

fclose($handle);