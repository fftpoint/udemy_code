<?php
$subject = $_POST["subject"];
$name = $_POST["name"];
$score = $_POST["score"];


$list = "$subject,$name,$score" . PHP_EOL;
file_put_contents("scores.csv", $list, FILE_APPEND | LOCK_EX);

header("Location: web_tr3.php");
?>