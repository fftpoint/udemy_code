<?php

$globalVariable = 'グローバル変数です';

// function checkScope(){
//     $localVariable = 'ローカル変数です';
//     global $globalVariable;
//     echo $globalVariable;
// }


function checkScope($str){
    $localVariable = 'ローカル変数です';
    // global $globalVariable;
    echo $str;
}

echo $globalVariable;
echo '<br>';
// echo $localVariable;

checkScope($globalVariable);

?>
