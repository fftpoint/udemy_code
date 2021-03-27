<?php
$str = "Hello World" . PHP_EOL;
$file = "hello.txt";
file_put_contents($file, $str, FILE_APPEND);