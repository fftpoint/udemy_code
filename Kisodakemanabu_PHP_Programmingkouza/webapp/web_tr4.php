<?php
$x = (int)filter_input(INPUT_POST, "x");
$y = (int)filter_input(INPUT_POST, "y");
$sum = $x + $y;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP Sample</title>
</head>
<body>
    <h3>Calc</h3>
    <hr>
    <p>
        <?php echo $x; ?>
        +
        <?php echo $y; ?>
        =
        <?php echo $sum; ?>
    </p>
</body>
</html>