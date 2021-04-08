<?php
// $name = null;
// if ($isset($_GET["name"])) {
//     $name = null;
// } elseif (!is_string($_GET["name"])) {
//     $name = false;
// } else {
//     $name = $_GET["name"];
// }

// $name = filter_input(INPUT_GET, "name");
$name = (string)filter_input(INPUT_GET, "name");

// var_dump($name);
// die("debag");

$names = file("names.txt", FILE_IGNORE_NEW_LINES);

$searched_names = [];
if ($name !== "") {
    for ($i=0; $i < count($names); $i++) { 
        if (strpos($names[$i], $name) !== false) {
            $searched_names[] = $names[$i];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP Sample</title>
</head>
<body>
    <h3>Search</h3>
    <hr>
    <ul>
    <?php
        for ($i=0; $i < count($searched_names); $i++) { 
    ?>
        <li><?php echo $searched_names[$i]; ?></li>
    <?php
        }
    ?>
    </ul>
</body>
</html>