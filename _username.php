<?php
session_start();

$username = $_SESSION['name'];

if (isset($_SESSION['id'])) {//ログインしているとき
    $msg = 'こんにちは' . htmlspecialchars($username, \ENT_QUOTES, 'UTF-8') . 'さん';
    $link = '<a href="login/logout.php">ログアウト</a>';
} else {//ログインしていない時
    $msg = 'ログインしていません';
    $link = '<a href="login/login.php">ログイン</a>';
}
?>

<div class="username">
    <h1><?php echo $msg; ?></h1>
    <p><?php echo $link; ?></p>
</div>

<style>

</style>

