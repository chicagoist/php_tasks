<?php

/*
  Если переменная $a равна нулю, то выведите 'Верно', иначе выведите 'Неверно'.
  Проверьте работу скрипта при $a, равном 1, 0, -3.
 */

function myTESTvar(int $param) {

    if ($param == 0) {

        echo 'Верно!<br />';
    } else {

        echo 'Неверно!<br />';
    }
}

$a = 0;
$b = 1;
$c = -3;


echo "Верно ли что $a = 0 ? ";
myTESTvar($a) . '<br />';

echo "Верно ли что $b = 0 ? ";
myTESTvar($b) . '<br />';

echo "Верно ли что $c = 0 ? ";
myTESTvar($c) . '<br />';
