<?php
// №1
$count = 0;
$i = 1;
while ($i <= 10) {
    $count++;
    $i++;
}
echo "Количество итераций: $count";
// №2
for ($i = 0; $i <= 20; $i += 2) {
    echo $i . "<br>";
}
// №3
$i = 10;
while ($i >= 0) {
    echo $i . "<br>";
    $i--;
}
// №4
$value = 2;
$target = 20;
while ($value < $target) {
    $value *= 2;
}
echo "Итоговое значение: $value";
// №5
for ($i = 20; $i >= 0; $i -= 2) {
    echo $i . "<br>";
}
