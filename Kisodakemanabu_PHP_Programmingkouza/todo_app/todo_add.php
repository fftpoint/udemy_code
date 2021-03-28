<?php
require_once("functions.php");

if (count($argv) != 2) {
    die(MESSAGE_TASK_EMPTY . PHP_EOL);
}

$task = $argv[1];
if ($task === "") {
    die(MESSAGE_TASK_EMPTY . PHP_EOL);
}

if (mb_strlen($task) > 140) {
    die(MESSAGE_TASK_MAX_LENGTH . PHP_EOL);
}

$id = get_new_todo_id();
$date = date('Y-m-d H:i:s');
$status = STATUS_OPENED;
$todo = [$id, $task, $date, $status];
add_todo_list($todo);