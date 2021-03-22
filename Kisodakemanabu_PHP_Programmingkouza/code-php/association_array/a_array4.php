<?php
$student = ["name" => "Andy", "age" => 20];
unset($student["age"]);

var_dump($student);