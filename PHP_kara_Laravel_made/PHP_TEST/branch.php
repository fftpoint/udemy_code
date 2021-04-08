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
?>