<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <link rel="stylesheet" href="bbs_style.css">
    <title>ログイン画面</title>
</head>
<body>
<h2>ログインフォーム</h2>
    <form action="register.php" method="POST">
 
    <p>
    <label for="email">メールアドレス: </label>
    <input type="email" name="email">
    </p>
    <p>
    <label for="password">パスワード: </label>
    <input type="password" name="password">
    </p>

    <p>
        <input type="submit" value="ログイン">
    </p>
    </form>
    <a href="signup,php">新規登録はこちら</a>
</body>
</html>

