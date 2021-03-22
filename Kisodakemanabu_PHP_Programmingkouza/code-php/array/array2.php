<?php

use FFI\Exception;

$names = ["Andy", "Betty", "Carol"];

try {
    echo $names[3];
} catch (Exception $e) {
    echo $e->getMessage();
}

