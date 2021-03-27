<?php
function greet($name) {
    return "Hello $name" . PHP_EOL;
}

$message = greet("Andy");
echo $message;