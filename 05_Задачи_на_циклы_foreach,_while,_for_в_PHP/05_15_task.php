<?php

/*
  Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
 * а выходные дни выведите жирным. 
 */

$arr = [1 => 'Пн', 2 => 'Вт', 3 => 'Ср', 4 => 'Чт', 5 => 'Пн', 6 => 'Сб',
    7 => 'Вс'];

print_r($arr);
echo '<br /><br />';

foreach ($arr as $key => $value) {

    if ($key <= 5) {

        echo $arr[$key] . '<br />';
    } elseif ($key > 5) {

        echo '<b>' . $arr[$key] . '</b>' . '<br />';
    }
}