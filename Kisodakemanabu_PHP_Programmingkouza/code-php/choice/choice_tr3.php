<?php
$id = $argv[1];
$password = $argv[2];

if ($id == "Andy" && $password == "secret") {
    echo "OK" . PHP_EOL;
} else {
    echo "NG" . PHP_EOL;
}