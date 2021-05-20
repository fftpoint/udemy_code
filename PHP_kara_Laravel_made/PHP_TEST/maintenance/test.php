<?php
// パスワードを記録した場所
echo __FILE__;
// /Applications/MAMP/htdocs/udemy_code/PHP_kara_Laravel_made/PHP_TEST/maintenance/test.php

echo '<br>';
// パスワード（暗号化）
echo password_hash('password123', PASSWORD_BCRYPT);
echo '<br>';

$contactFile = '.contact.dat';

// $fileContent = file_get_contents($contactFile);

// ファイルに書き込み（上書き）
// file_put_contents($contactFile, 'テストです');

$addText = 'テストです' . PHP_EOL;
// ファイルに書き込み（追記）
file_put_contents($contactFile, $addText, FILE_APPEND);

// 配列 file関数, 区切る explode関数, foreach
$contactCsv = 'contact.csv';

$allData = file($contactCsv);

foreach ($allData as $lineData) {
    $lines = explode(',', $lineData);
    echo $lines[0]. '<br>';
    echo $lines[1]. '<br>';
    echo $lines[2]. '<br>';
}

echo '<br>';
$contents = fopen($contactCsv, 'a+');

$addText = '1行追加' . PHP_EOL;
fwrite($contents, $addText);

fclose($contents);