<?php
require_once("functions.php");

if (count($argv) != 2) {
    die(MESSAGE_ID_INVALID . PHP_EOL);
}

$id = (int)$argv[1];
if ($id <= 0) {
    die(MESSAGE_ID_INVALID . PHP_EOL);
}

$todo_list = read_todo_list(false);
foreach ($todo_list as &$todo) {
    if ((int)$todo[0] === $id) {
        $todo[3] = STATUS_CLOSED;
        break;
    }
}
write_todo_list($todo_list);