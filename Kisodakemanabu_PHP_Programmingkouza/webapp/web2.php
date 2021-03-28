<?php
$names = ["Andy", "Betty", "Carol"];
$date = date("Y-m-d H:i:s");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP Sample</title>
</head>
<body>
    <h1>Names</h1>
    <!-- <ul>
    <li><?php echo $names[0]; ?></li>
    <li><?php echo $names[1]; ?></li>
    <li><?php echo $names[2]; ?></li>
    </ul> -->

    <ul>
    <?php
        for ($i=0; $i < count($names); $i++) { 
    ?>
        <li><?php echo $names[$i]; ?></li>
    <?php
        }
    ?>
    </ul>
    <hr>
    <p><?php echo $date; ?></p>
</body>
</html>