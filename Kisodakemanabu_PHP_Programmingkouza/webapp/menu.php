<?php
session_start();

if (!isset($_SESSION["id"])) {
    header("Location: login.html");
}

$id = $_SESSION["id"];
$time = $_SESSION["time"];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP Sample</title>
</head>
<body>
    <h3>Menu - Hello <?php echo $id; ?></h3>
    <h5>Login at <?php echo $time;?></h5>
    <hr>
    <ul>
        <li><a href="logout.php">logout</a><li>
    </ul>
</body>
</html>