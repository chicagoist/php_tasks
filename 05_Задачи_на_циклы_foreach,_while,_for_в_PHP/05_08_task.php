<?php

/*
  Решите эти задачи сначала через цикл while, а затем через цикл for.

  Выведите столбец четных чисел в промежутке от 0 до 100.
 */

echo 'Первый вариант через while<br /><br />';

$i = 2;
while ($i <= 100) {
    

    echo $i . '<br />';
    $i += 2;
}

echo '<br /><br />';


echo 'Второй вариант через for<br /><br />';

for ($i = 2; $i <= 100; $i += 2) {

    echo $i . '<br />';
}