<?php
//filter_inputでサニタイズ
$memo = filter_input(INPUT_POST, 'memo',FILTER_SANITIZE_SPECIAL_CHARS);
    //データーベースへの接続
        require('dbconnect.php');
        //sqlの準備
        $stmt = $db->prepare('insert into memos(memo) values(?)');
        if(!$stmt){
            die($db->$error);
        }
        $stmt->bind_param('s',$memo);
        //executeでsqlの実行する
        $ret = $stmt->execute();

        if($ret){
            echo '登録されました';
            echo '<p><a href="index.php">一覧に戻ります</a></p>';
        }else{
            $db->error;
        }
?>