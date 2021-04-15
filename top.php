<?php

require_once 'classes/UserLogic.php'; 
// error message
$err = [];

// validation

if(!$email = filter_input(INPUT_POST, 'email')) {
    $err[] = 'メールアドレスを記入してください。';
}

if(!$password = filter_input(INPUT_POST, 'password')
) {
    $err[] = 'パスワードを記入してください。'; 
}

if (count($err) === 0) {
    //ログインする処理
    echo 'ログインしました。';
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <link rel="stylesheet" href="bbs_style.css">
    <title>ユーザー登録完了画面</title>
</head>
<body>
<?php if (count($err) > 0) : ?>
<?php foreach($err as $e) : ?>
    <p><?php echo $e ?></p>
    <?php endforeach ?>
  <?php else : ?>
    <p>会員登録が完了しました。</p>
　<?php endif ?>
  <a href="./login.php">戻る</a>
  </body>
    </html>