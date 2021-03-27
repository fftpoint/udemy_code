<?php
$names = ["Andy", "Betty"];
$file = "names.txt";
$handle = fopen($file, "w");
for ($i=0; $i < count($names); $i++) { 
    fwrite($handle, $names[$i] . PHP_EOL);
}
fclose($handle);