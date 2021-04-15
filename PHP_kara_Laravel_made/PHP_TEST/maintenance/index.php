<?php

require 'db_connection.php';

// ユーザー入力なし query
// $sql = 'select * from contacts where id = 4'; //sql
// $stmt = $pdo->query($sql);

// $result = $stmt->fetchAll();

// echo '<pre>';
// var_dump($result);
// echo '<pre>';

// ユーザー入力あり prepare, bind, execute (対策対象：delete *, SQLインジェクション)
$sql = 'select * from contacts where id = :id'; //名前付きプレースホルダー
$stmt = $pdo->prepare($sql); //プリペアードステートメント
$stmt->bindValue('id', 3, PDO::PARAM_INT); //紐付け
$stmt->execute(); //実行

$result = $stmt->fetchAll();

echo '<pre>';
var_dump($result);
echo '<pre>';

// トランザクション まとまって処理 beginTransaction, commit, rollback
// ex)銀行 残高を確認->Aさんから引き落とし->Bさんに振り込み

$pdo->beginTransaction();


try {
    // sql処理
    $stmt = $pdo->prepare($sql); //プリペアードステートメント
    $stmt->bindValue('id', 3, PDO::PARAM_INT); //紐付け
    $stmt->execute(); //実行

    $pdo->commit();

} catch (PDOException $e) {
    $pdo->rollBack();
}