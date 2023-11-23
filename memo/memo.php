<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メモの内容</title>
</head>
<body>
<?php
    require('dbconnect.php');
    $stmt = $db->prepare('select * from memos where id=?');
    if(!$stmt){
        die ($db->error);
    }
    //idをパラメーターで受け取る
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    if(!$id){
        echo '表示するメモを指定してください';
        exit();
    }
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->bind_result($id, $memo, $created);
    //メモの内容を1件出力
    $result = $stmt->fetch();
    if (!$result) { // ここから追加
        echo '指定されたメモは見つかりませんでした';
        exit();
    }
?>
<div>
    <pre><?php echo htmlspecialchars($memo);?></pre>
</div>
<p><a href="update.php?id=<?php echo $id;?>">編集する</a> |<a href="index.php">一覧へ</a>|
<a href="delete.php?id=<?php echo $id;?>">削除する</a></p>

</body>
</html>