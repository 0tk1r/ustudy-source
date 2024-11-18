<?php
// Цикл операторларына тыйслы маселелер
// №1
$a = 0;
for ($i = 1; $i < 100; $i++) {
    $a += $i;
}
echo "Сумма чисел от 1 до 100: " . $a . "<br>";
echo "<br><br>";
// №2
$b = 2;
for ($i = 1; $i < 10; $i++) {
    echo "$b x $i = " . $b * $i . "<br>";
}
echo "<br><br>";
// №3 
$numbers = [2, 4, 5, 22, 43, 1, 88, 76,];
$minnumber = $numbers[0];
foreach ($numbers as $number) {
    if ($number < $minnumber) {
        $minnumber == $number;
    }
}
echo "Минимальный значение: $minnumber";
echo "<br><br>";
// №4
$numfac = 4;
$fac = 1;

if ($numfac < 0) {
    echo "Факториал для отрицательных чисел не существует.";
} else {
    while ($numfac > 1) {
        $fac *= $numfac;
        $numfac--;
    }
}
echo "Факториал числа равен: $fac";
echo "<br><br>";
// №5
$sumnumber = 0;
for ($i = 2; $i < 50; $i += 2) {
    $sumnumber += $i;
}
echo "Сумма четных чисел от 1 до 50: $sumnumber";
echo "<br><br>";
// №6
$renum = 10;
do {
    echo "$renum <br>";
    $renum--;
} while ($renum >= 1);
echo "<br><br>";
// №7
$otnumber = [23, 21, 45, 37, -22, 12, -1];
foreach ($otnumber as $key => $val) {
    if ($val < 0) {
        echo "Первое отрицательное число: $val индекс => $key";
        break;
    }
}
echo "<br><br>";
// №8
for ($k = 1; $k < 20; $k += 2) {
    echo "Результат: $k <br>";
}
echo "<br><br>";
// №9
$string = "PHP";
for ($i = 0; $i < strlen($string); $i++) {
    echo $string[$i] . "<br>";
}
echo "<br><br>";
// №10
$nummbers = [-2, -1, -44, -21, -15, 65, 102, 111, 94, 77];
foreach ($nummbers as $key => $val) {
    if ($val < 0) {
        echo "Отрицательные число: $val <br>";
    } else {
        echo "Положительные число: $val <br>";
    }
}
echo "<br><br>";
// №11
$jupnumber = 2;
while ($jupnumber < 10) {
    echo "$jupnumber <br>";
    $jupnumber += 2;
}
// №12
// №13
echo "<br><br>";
// №14
$target = 10;
$sum = 0;
$i = 1;
do {
    $sum += $i;
    $i++;
} while ($i <= $target);
echo "Сумма чисел до $target: $sum";
echo "<br><br>";
// №15
$numberr = [2, 4, 3, 5];
foreach ($numberr as $key => &$val) {
    if ($val % 2 == 0) {
        echo "Четные x2: " . ($val *= 2) . "<br>";
    } else {
        echo "Четные -1: " . ($val -= 1) . "<br>";
    }
}
unset($val);
echo "<br><br>";
