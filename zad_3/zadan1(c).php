<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-1</title>
</head>
<body>

<p1>Задание 1(c)</p1><br>
<p1>Введите 2 числа и знак, который вам нужен</p1><br>

<?php
$signed = ['*','/','+','-','%'];
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
    <label>
        <input name = "a" type="number" value="<?php if(isset($_GET['a']) && is_numeric($_GET['a'])) echo $_GET['a'];?>">
    </label>
    <label>
        <select size="1" name="sign" >
            <?php foreach( $signed as $var): ?>
            <option value="<?php echo $var ?>"<?php if( $var == $_GET['sign'] ): ?> selected="selected"<?php endif; ?>> <?php echo $var ?></option>
            <?php endforeach; ?>
        </select>
    </label>
    <label>
        <input name = "b" type="number" value="<?php if(isset($_GET['b']) && is_numeric($_GET['b'])) echo $_GET['b'];?>">
    </label>
    <input type="submit" value="=">

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $flag = true;
        if(isset($_GET['a']) && $_GET['a'] !=""){
            $a = $_GET['a'];
        }
        else{
            echo "<br>Введите коэффициент 1<br>";
            $flag = false;
        }
        if(isset($_GET['b']) && $_GET['b'] !=""){
            $b = $_GET['b'];
        }
        else{
            echo "<br>Введите коэффициент 2<br>";
            $flag = false;
        }
        if(isset($_GET['sign'])){
            $sign = $_GET['sign'];
        }
        else{
            echo "<br>Введите знак<br>";
            $flag = false;
        }
        if($flag){
            switch($sign){
                case '*':
                    echo (int)$a * (int)$b;
                    break;
                case '/':
                    if((int) $b === 0)
                        echo 0;
                    else
                        echo (int)$a / (int)$b;
                    break;
                case '+':
                    echo (int)$a + (int)$b;
                    break;
                case '-':
                    echo (int)$a - (int)$b;
                    break;
                case '%':
                    if((int) $b === 0)
                        echo 0;
                    else
                        echo (int)$a % (int)$b;
                    break;
            }
        }
    }
    else{
        echo "Какие-то неполадки,зайдите позже";
    }
    ?>

</form>

</body>
</html>