<?php
$height = 90;
var_dump($height);

if ($height === 91) {
    echo '身長は' . $height . 'cmです。' . '<br>';
} else {
    echo '身長は' . $height . 'ではありません。' . '<br>';
}

$test = '';

if (empty($test)) {
    echo "変数は空です。" . '<br>';
}


// 三項演算子
$math = 80;

$comment = $math > 80 ? 'good' : 'not good';

echo $comment . '<br>';

$members = [
    'name' => '本田',
    'heigh' => 170,
    'hobby' => 'サッカー'
];

foreach ($members as $member) {
    echo $member . '<br>';
}

foreach ($members as $key => $value) {
    echo $key . 'は' . $value . 'です。' . '<br>';
}

$members_2 = [
    '本田' => [
        'height' => 170,
        'hobby' => 'サッカー'
    ],
    '香川' => [
        'height' => 165,
        'hobby' => 'サッカー'
    ]
];

foreach ($members_2 as $member => $detail) {
    foreach ($detail as $key => $value) {
        echo  $member . 'の' . $key . 'は' . $value . 'です。' . '<br>';
    }
}
//contine, break
for ($i=0; $i < 10; $i++) { 
    if ($i === 5) {
        // break;
        continue;
    }
    echo $i;
}

echo '<br>';

$j = 0;
while ($j < 5) {
    echo $j;
    $j++;
}

echo '<br>';

$k = 0;
do {
    echo $k;
    $k++;
} while ($k < 5);

echo '<br>';

// switch
// if分の方が見やすい

// $data = 1;
// swhitchの比較は==であり、型を見ない
$data = '1';

switch ($data === 1) {
    case 1:
        echo '1です';
        break;

    case 2:
        echo '2です';
        break;

    case 3:
        echo '3です';
        break;

    default:
        echo '1-3ではありません';
        break;
}


?>

