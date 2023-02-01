<?php
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_GET['a']) && isset($_GET['sign']) && isset($_GET['b']) && $_GET['a'] !="" && $_GET['b'] !=""){
        $a = $_GET['a'];
        $b = $_GET['b'];
        $sign = $_GET['sign'];
        echo $a. $sign . $b . "= ";
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
    else{
        echo "Вы ввели не все коэффициенты";
    }
}
else{
    echo "Какие-то неполадки,зайдите позже";
}