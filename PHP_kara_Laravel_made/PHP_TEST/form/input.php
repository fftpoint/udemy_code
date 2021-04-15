<?php
/*
入力、確認、完了 input.php, confirm.php, thanks.php

XSS：入力をhtmlspecialcharsでサニタイズする

クリアボタン：header('X-FRAME-OTIONS:DENY')

CSRF(cross-site request forgeries) 偽物のinput.php->悪意のあるページ：
    1. セッションに乱数をトークンとして加える
    2. POSTにトークンを加える
    3. セッションとPOSTを比較する

バリデーション：未入力など
*/

session_start();

require 'validation.php';
header('X-FRAME-OTIONS:DENY');

if (!empty($_POST)) {
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
}

function h($str){
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

$pageFlag = 0;
$errors = validation($_POST);

if (!empty($_POST['btn_confirm']) && empty($errors)) {
    $pageFlag = 1;
}

if (!empty($_POST['btn_submit'])) {
    $pageFlag = 2;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>index.php</title>
  </head>
  
<body>

<?php if ($pageFlag === 0) : ?>
    <?php
        if (!isset($_SESSION['csrToken'])) {
            $csrToken = bin2hex(random_bytes(8));
            $_SESSION['csrToken'] = $csrToken;
        }
        $token = $_SESSION['csrToken'];
    ?>

    <?php if (!empty($errors) && !empty($_POST['btn_confirm'])) : ?>
    <?php echo '<ul>';
        foreach ($errors as $error) {
            echo '<li>' . $error . '</li>';
        }
    ?>
    <?php echo '</ul>'; ?>
    <?php endif; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form method="POST" action="input.php">
                <div class="mb-3">
                    <label for="your_name">氏名</label>
                    <input type="text" class="form-control" id="your_name" name="your_name" value="<?php if(!empty($_POST['your_name'])){echo h($_POST['your_name']);} ?>" required>
                </div>
                
                <div class="mb-3">
                    <label for="email">メールアドレス</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php if(!empty($_POST['email'])){echo h($_POST['email']);} ?>" required>
                </div>

                <div class="mb-3">
                    <label for="url">ホームページ</label>
                    <input type="url" class="form-control" id="url" name="url" value="<?php if(!empty($_POST['url'])){echo h($_POST['url']);} ?>">
                </div>

                性別
                <div class="mb-3 form-check form-check-inline">
                    <input type="radio" class="form-check-inline" name="gender" id="gender1" value="0" 
                    <?php if (isset($_POST['gender']) && $_POST['gender'] === '0') { echo 'checked'; }?>>
                    <label class="form-check-label" for="gender1">男性</label>
                    <input type="radio" class="form-check-inline" name="gender" id="gender2" value="1" 
                    <?php if (isset($_POST['gender']) && $_POST['gender'] === '1') { echo 'checked'; }?>>
                    <label class="form-check-label" for="gender2">女性</label>
                </div>

                <div class="mb-3">
                    <label for="age">年齢</label>
                    <select class="form-control" name="age" id="age">
                        <option value="">選択してください</option>
                        <option value="1" selected>〜19歳</option>
                        <option value="2">20歳〜29歳</option>
                        <option value="3">30歳〜39歳</option>
                        <option value="4">40歳〜49歳</option>
                        <option value="5">50歳〜59歳</option>
                        <option value="6">60歳〜69歳</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="contact">お問い合わせ内容</label>
                    <textarea class="form-control" id="contact" row="3" name="contact"><?php if(!empty($_POST['contact'])){echo h($_POST['contact']);} ?></textarea>
                </div>

                <div class="mb-3 form-check">
                    <input class="form-check-input" type="checkbox" id="caution" name="caution" value="1">
                    <label class="form-check-label" for="caution">注意事項にチェックする</label>
                </div>

                <input class="button btn-primary" type="submit" name="btn_confirm" value="確認する">
                <input type="hidden" name="csrf" value="<?php echo h($token) ?>">
                </form>
            </div> <!-- .col-md-6 -->
        </div>
    </div>

    <!-- <input type="checkbox" name="sports[]" value="野球">野球
    <input type="checkbox" name="sports[]" value="サッカー">サッカー
    <input type="checkbox" name="sports[]" value="バスケ">バスケ -->

<?php endif; ?>

<?php if ($pageFlag === 1) : ?>
    <?php if ($_POST['csrf'] === $_SESSION['csrToken']) : ?>
    <form method="POST" action="input.php">
    氏名
    <?php echo h($_POST['your_name']); ?>
    <br>
    メールアドレス
    <?php echo h($_POST['email']); ?>
    <br>
    ホームページ
    <?php echo h($_POST['url']); ?>
    <br>
    性別
    <?php
        if ($_POST['gender'] === '0') {
            echo '男性';
        }
        if ($_POST['gender'] === '1') {
            echo '女性';
        }
    ?>
    <br>
    年齢
    <?php
        if ($_POST['age'] === '1') {
            echo '~19歳';
        }
        if ($_POST['age'] === '2') {
            echo '20歳~29歳';
        }
        if ($_POST['age'] === '3') {
            echo '30歳~39歳';
        }
        if ($_POST['age'] === '4') {
            echo '40歳~49歳';
        }
        if ($_POST['age'] === '5') {
            echo '50歳~59歳';
        }
        if ($_POST['age'] === '6') {
            echo '60歳~69歳';
        }
    ?>
    <br>
    お問い合わせ内容
    <?php echo h($_POST['contact']); ?>
    <br>

    <input type="submit" name="back" value="戻る">
    <input type="submit" name="btn_submit" value="送信する">
    <input type="hidden" name="your_name" value="<?php echo h($_POST['your_name']); ?>">
    <input type="hidden" name="email" value="<?php echo h($_POST['email']); ?>">
    <input type="hidden" name="url" value="<?php echo h($_POST['url']); ?>">
    <input type="hidden" name="gender" value="<?php echo h($_POST['gender']); ?>">
    <input type="hidden" name="age" value="<?php echo h($_POST['age']); ?>">
    <input type="hidden" name="contact" value="<?php echo h($_POST['contact']); ?>">
    <input type="hidden" name="email" value="<?php echo h($_POST['email']); ?>">

    <input type="hidden" name="csrf" value="<?php echo h($_POST['csrf']); ?>">
    </form>
    <?php endif; ?>
<?php endif; ?>

<?php if ($pageFlag === 2) : ?>
    <?php if ($_POST['csrf'] === $_SESSION['csrToken']) : ?>
        <?php
            require '../maintenance/insert.php';

            insertConnect($_POST);
        ?>
        送信が完了しました。
        <?php unset($_SESSION['csrToken']); ?>
    <?php endif; ?>
<?php endif; ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>
</html>