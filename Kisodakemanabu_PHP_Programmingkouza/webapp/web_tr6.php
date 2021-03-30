<?php
$subject = $_GET["subject"];
$handle = fopen("scores.csv", "r");
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <h3>Socres</h3>
    <hr>
    <table border="1">
        <tr>
            <th>Subject</th>
            <th>Name</th>
            <th>Score</th>
        </tr>

        <?php
        while (($list = fgetcsv($handle)) !== false) {
            if ($list[0] === $subject) {
        ?>
                <tr>
                    <td><?php echo $list[0] ?></td>
                    <td><?php echo $list[1] ?></td>
                    <td><?php echo $list[2] ?></td>
                </tr>
        <?php
            }
        }
        fclose($handle);
        ?>
    </table>
</body>

</html>