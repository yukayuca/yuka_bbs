<?php
require_once '/Applications/MAMP/db_config.php';
$handlename = $_POST['handlename'];
$message = $_POST['message'];
$created =date('Y-m-d H:i:s'); 
try {
    $dbh = new PDO ('mysql:host=localhost;dbname=bbs_yuka;charset=utf8', $user, $pass); 
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $sql = "INSERT INTO MessageData(handlename, message, created) VALUES (?, ?, ?)";
    $stmt = $dbh->prepare($sql); 
    $stmt->bindValue(1, $handlename, PDO::PARAM_STR); 
    $stmt->bindValue(2, $message, PDO::PARAM_STR); 
    $stmt->bindValue(3, $created, PDO::PARAM_STR); 
    $stmt->execute();
    $dbh = null; 
    echo "メッセージの投稿が完了しました。<br>";
    echo "<a href='index.php'>トップページへ戻る</a>";
} catch (Exception $e) { 
    echo "エラー発生: " . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8') . "<br>";
    die();
}
?>
