<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>じゃんけんプログラム</title>
</head>
<?php

?>
<body>
    <h1>じゃんけんプログラム</h1>
    <p>出す手を選んで勝負してください。</p>
    <form method="post" action="janken_battle.php">
        <input type="radio" name="battle" value="グー" checked>グー
        <input type="radio" name="battle" value="チョキ">チョキ
        <input type="radio" name="battle" value="パー">パー
        <button type="submit">勝負する</button>
    </form>
</body>
</html>