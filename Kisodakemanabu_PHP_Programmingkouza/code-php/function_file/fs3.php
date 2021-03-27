<?php
$file = "hello.txt";
$array = file($file, FILE_IGNORE_NEW_LINES);
print_r($array);