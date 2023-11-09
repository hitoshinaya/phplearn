<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>簡易電卓</title>
</head>
<?php
    $calc1="";
    $symbol="";
    $calc2="";
    $anser="";
    $formula="";
    if(isset($_POST['calc1']) && isset($_POST['symbol']) && isset($_POST['calc2'])){
        $calc1 = $_POST['calc1'];
        $symbol = $_POST['symbol'];
        $calc2 = $_POST['calc2'];
        //var_dump($_POST);
        //入力チェック
        if($calc2 == 0 && $symbol == "÷") {
            echo "計算できません。";
        }else{
        switch($symbol){
            case "-":
                $anser = $calc1-$calc2;
                break;
            case "+":
                $anser = $calc1+$calc2;
                break;
            case "×":
                $anser = $calc1*$calc2;
                break;
            case "÷":
            default:
                $anser = $calc1/$calc2;
                break;
        }
        $formula = ($calc1.$symbol.$calc2."=".$anser);
    }
    }
?>
<body>
    <div class="calc-box">
        <h1>電卓</h1>
        <form method="POST" action="#">
            <!--php echo $変数名;で入力値保持したままにする。-->
            <input type="text" name="calc1" value="<?php echo $calc1; ?>" required>
            <select name="symbol">
                <option value="<?php echo '+'; ?>">+</option>
                <option value="<?php echo '-'; ?>">-</option>
                <option value="<?php echo '×'; ?>">×</option>
                <option value="<?php echo '÷'; ?>">÷</option>
            </select>
            <input type="text" name="calc2" value="<?php echo $calc2; ?>" required>
            <button type="submit">送信</button>
        </form>
        <p><?php echo $formula ?></p>
    </div>
</body>
</html>