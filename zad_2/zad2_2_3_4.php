<?php
    echo "Задание 2";
    echo "\n";
    include __DIR__ ."/function.php";
    echo "Введите коэффициент a,b,c квадратного уравнения", "\n";
    echo "Введите a:";
    (int)($a = fgets(STDIN));
    echo "Введите b:";
    (int)($b = fgets(STDIN));
    echo "Введите c:";
    (int)($c = fgets(STDIN));
    echo "Дискриминант: ";
    switch(discriminate($a,$b,$c)){
        case null:
            echo "Отрицательный дискриминант";
            break;
        default:
            echo discriminate($a,$b,$c);
            break;

    }
    echo "\n";
    echo "\n";

    echo "Задание 3";
    echo "\n";
    $x = include("dop/incl.php");
    var_dump(include("dop/incl.php"));
    echo "Вывод: ", $x, "\n";
    echo "\n";
    $x = include("dop/incl1.php");
    var_dump(include("dop/incl1.php"));
    echo "Вывод: ", $x, "\n";
    echo "\n";
    var_dump(include("Задание_2.txt"));
    echo "\n";
    #$x = include("incl2.php");
    #echo "Вывод: ", $x, "\n";

    echo "Задание 4";
    echo "\n";
    echo "Введите имя:";
    $name = fgets(STDIN);
    $name = preg_replace('/\s+/', '', $name);
    switch (genders($name)){
        case null:
            echo "Не могу определить";
            break;
        default:
            echo genders($name);
            break;
    }
