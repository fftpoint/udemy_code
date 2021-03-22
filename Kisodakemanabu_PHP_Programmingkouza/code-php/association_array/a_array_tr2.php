<?php
$scores = [
    ["english" => 90, "math" => 88, "science" => 80],
    ["english" => 64, "math" => 72, "science" => 72],
    ["english" => 90, "math" => 92, "science" => 94],
];

$subject = "math";

$math_score = 0;
for ($i=0; $i < count($scores); $i++) { 
    $socore = $scores[$i];
    $math_score += $socore[$subject];
};

echo $math_score;

// $sum = 0;

// foreach ($scores as $score) {
//     foreach ($score as $subject => $point) {
//         $sum += $point;
//     };
// };
// 
// echo $sum . PHP_EOL; 