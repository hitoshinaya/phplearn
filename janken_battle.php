<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>結果は・・・</title>
</head>
<?php
$hands = array("グー","チョキ","パー");

if(isset($_POST['battle'])){
    $user_hands = $_POST['battle'];
    $key = array_rand( $hands, $num = 1 );
    $enemy_hands = $hands[$key];
    if($user_hands == $enemy_hands ){
        $result = "あいこ";
    }elseif(($user_hands == "グー" && $enemy_hands == "チョキ")||
    ($user_hands == "チョキ" && $enemy_hands == "パー")||
    ($user_hands == "パー" && $enemy_hands == "グー")){
        $result = "勝ち";
    }else{
        $result = "負け";
    }
}
?>
<body>
    <h1>結果は・・・</h1>
    <p><?php echo $result; ?>!</p>
    <p>あなた:<?php echo $user_hands; ?></p>
    <p>あいて:<?php echo $enemy_hands; ?></p>
    <p><a href="janken_index.php">>>もう1回勝負する</a></p>
</body>
</html>