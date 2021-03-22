<?php
$name = ["Andy", "Betty", "Carol"];

$temp = $name[0];
$name[0] = $name[2];
$name[2] = $temp;

var_dump($name);