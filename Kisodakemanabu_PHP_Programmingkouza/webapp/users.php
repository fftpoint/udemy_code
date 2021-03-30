<?php
$handle = fopen("users.csv", "r");
$users = [];
while (($line = fgetcsv($handle)) != false) {
    $users[] = $line;
}
fclose($handle);
// print_r($users);

header("Content-Type: text/plain");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP Sample</title>
</head>
<body>
    <h3>Users</h3>
    <hr>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>NAME</th>
            <th>AGE</th>
        </tr>
    <?php
    for ($i=0; $i < count($users); $i++) { 
    ?>
    <tr>
        <td><?php echo $users[$i][0] ?></td>
        <td><?php echo $users[$i][1] ?></td>
        <td><?php echo $users[$i][2] ?></td>
    </tr>
    <?php
    }
    ?>
    </table>
</body>
</html>