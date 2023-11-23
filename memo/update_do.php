<?php require('dbconnect.php');
$stmt = $db->prepare('update memos set memo=? where id=?');
if(!$stmt){
    die($db->error);
}
//IDとメモの内容をフォームから受け取る
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$memo = filter_input(INPUT_POST, 'memo', FILTER_SANITIZE_STRING);
// memo=?とid=?のテキストと数字を受け取るsとiを指定
$stmt->bind_param('si', $memo, $id);
//SQL文の実行
$success = $stmt->execute();
if(!$success){
    die($db->error);
}
header('Location:memo.php?id=' . $id)
?>