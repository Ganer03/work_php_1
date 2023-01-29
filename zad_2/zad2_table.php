<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-2</title>
</head>
<body>

<p1>Задание 1</p1><br>
<p1>Таблица истинности:</p1>
    <?php
        echo "<table>";
        echo "<tr> <td> a </td> <td> b </td> <td> && </td> <td> || </td> <td> xor </td> </tr>";
        for($a = 0;$a<=1;$a++){
            for($b=0;$b<=1;$b++){
                $c = (int) ($a && $b);
                $d = (int) ($a || $b);
                $e = (int) ($a xor $b);
                echo "<tr> <td> $a </td> <td> $b </td> <td> $c </td> <td> $d </td> <td> $e </td> </tr>";
            }
        }
        echo "</table>";
    ?>

<p1>Задание 2</p1><br>
<p1>Введите коэффициент a,b,c квадратного уравнения</p1>
<form action="" method="GET">
    <label>
        <div class = "a-styler"> a </div>
        <input name="user1" value="<?php if(isset($_GET['user1'])) echo $_GET['user1']; ?>">
    </label>
    <label>
        <div class = "a-styler"> b </div>
        <input name="user2" value="<?php if(isset($_GET['user2'])) echo $_GET['user2']; ?>">
    </label>
    <label>
        <div class = "a-styler"> c </div>
        <input name="user3" value="<?php if(isset($_GET['user3'])) echo $_GET['user3']; ?>">
    </label>
    <input type="submit">
</form>

<?php
include __DIR__ ."/function.php";
$a = (int)$_GET['user1'];
$b = (int)$_GET['user2'];
$c = (int)$_GET['user3'];
//    echo "Введите a:";
//    (int)($a = fgets(STDIN));
//    echo "Введите b:";
//    (int)($b = fgets(STDIN));
//    echo "Введите c:";
//    (int)($c = fgets(STDIN));
echo "Дискриминант: ";
switch(discriminate($a,$b,$c) !== null){
    case false:
        echo "Отрицательный дискриминант<br/>";
        break;
    case true:
        echo discriminate($a,$b,$c)."<br/>"."<br/>";
        break;

}
?>
<?php
//    echo "Задание 3<br/>";
//    echo "Файл существует и присутствует return<br/>";
//    $x = include("dop/incl.php");
//    var_dump(include("dop/incl.php"));
//    echo "Вывод: ", $x, "<br/>";
//    echo "Файл существует но нет return<br/>";
//    $x = include("dop/incl1.php");
//    var_dump(include("dop/incl1.php"));
//    echo "Вывод: ", $x, "<br/>";
//    echo "Файл существует и он текстовый<br/>";
//    var_dump(include("Задание_2.txt"));
//    echo "<br/>";
//    echo "Файл не существует<br/>";
//    $x = include("incl2.php");
//    echo "Вывод: ", $x, "\n";
?>
<p1>Задание 4</p1><br>
<p1>Введите имя:</p1>
<form action="" method="POST">
    <label>
        <div class = "a-styler"> name </div>
        <input name="user" value="<?php if(isset($_POST['user'])) echo $_POST['user']; ?>">
    </label>
    <input type="submit">
</form>

<?php
//    $name = fgets(STDIN);
//    $name = preg_replace('/\s+/', '', $name);
$name = (string)$_POST['user'];
echo "Пол: ";
switch (genders($name)){
    case null:
        echo "Не могу определить";
        break;
    default:
        echo genders($name);
        break;
}
?>

<style>
    form{
        display: grid;
        width: 100px;
    }
    label{
        padding: 5px;
        display: flex;
    }
    .a-styler{
        margin-right: 10px;
    }
</style>
</body>
