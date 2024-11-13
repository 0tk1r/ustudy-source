<?php
// Цикл операторларына тыйслы маселелер
// №1
$a = 0;
for ($i = 1; $i < 100; $i++) {
    $a += $i;
}
echo "Сумма чисел от 1 до 100: " . $a . "<br>";
// №2
$b = 2;
for ($i = 1; $i < 10; $i++) {
    echo "$b x $i = " . $b*$i . "<br>";
}
// №3
$nummin = [2, 3, 4, 5, 22, 1, 99, 23,];
foreach ($nummin as $key) {
 echo min($key, $nummin[$key]) ."<br>";
}