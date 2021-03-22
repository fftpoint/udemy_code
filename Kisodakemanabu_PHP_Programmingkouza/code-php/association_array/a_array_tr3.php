<?php
$countries = [
    "Japan" => ["Tokyo", "Osaka", "Nagoya"],
    "England" => ["London", "birmingham", "Glasfow"],
    "France" => ["Paris", "Marseille", "Lyon"]
];

$desire_country = "England";

foreach ($countries[$desire_country] as $desire_city) {
    echo $desire_city . PHP_EOL;
};