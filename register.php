<?php

require_once '../classes/UserLogic.php'; 
// error message
$err = [];

// validation

if(!$username = filter_input(INPUT_POST, 'username')) {
    $err[] = 'ユーザー名を記入してください。';
}

if(!$email = filter_input(INPUT_POST, 'email')) {
    $err[] = 'メールアドレスを記入してください。';
}

if(!$password = filter_input(INPUT_POST, 'password'));
// 正規表現
if (!preg_match("/\A[a-z\d]{8,100}+\z/i",$password)) {
    $err[] = 'メールアドレスを記入してください。';
}
$password_conf = filter_input(INPUT_POST, 'password_conf');
if ($password !== $password_conf) {
    $err[] = '確認用パスワードと異なります。';
}

if (count($err) === 0) {
    //ユーザを登録する処理
    $hasCreated = UserLogic::createUser($_POST);
    
    if(!$hasCreated) {
    $err[] = '登録に失敗しました';
    }
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
  <a href="./signup.php">戻る</a>
  </body>
    </html>