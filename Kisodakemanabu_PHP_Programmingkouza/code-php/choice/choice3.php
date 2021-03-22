<?php
$dice = 2;

if ($dice >= 5) {
    echo "Win";
} elseif ($dice >= 3) {
    echo "Drow";
} elseif ($dice >= 2) {
    echo "Draw2";
} else {
    echo "Lose";
}