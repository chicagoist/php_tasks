<?php

/* 
Если переменная $a больше 2-х и меньше 11-ти, или переменная $b 
больше или равна 6-ти и меньше 14-ти, то выведите 'Верно', в противном 
случае выведите 'Неверно'. 
 */

function myTESTvar($param1, $param2) {

    if (($param1 > 2 and $param1 < 11) or ($param2 >= 6 and $param2 < 14)) {

        echo 'Верно!<br />';
    } else {

        echo 'Неверно!<br />';
    }
}

$a = 5;
$b = 0;
$c = -3;
$d = 2;



echo "Если переменная $a больше 2-х и меньше 11-ти, или переменная $b <br />
больше или равна 6-ти и меньше 14-ти, то выведите 'Верно', в противном <br />
случае выведите 'Неверно'.  ";
myTESTvar($a, $b) . '<br />';

echo '<br /><br />';

echo "Если переменная $c больше 2-х и меньше 11-ти, или переменная $d <br />
больше или равна 6-ти и меньше 14-ти, то выведите 'Верно', в противном <br />
случае выведите 'Неверно'.  ";
myTESTvar($c, $d) . '<br />';

