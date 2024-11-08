<?php
#Тернарные условные операторы (5 задач)
#Задача-№1: Задача на проверку четности числа.
/*
Напишите код, который проверяет, является ли заданное число четным, и выводит
"Четное" или "Нечетное" в зависимости от результата.
*/

#Решение:

$num = 2;
$result = ($num % 2 == 0) ? 'Число четное' : 'Число нечетное';

echo $result;

echo '<br>'; //Новая строка

#Задача-№2: Проверка на совершеннолетие.
/*
Задайте переменную с возрастом и используйте тернарный оператор, чтобы
проверить, достиг ли человек совершеннолетия. Если да — выведите
"Совершеннолетний", если нет — "Несовершеннолетний".
*/

#Решение:

$age = 18;
$ageresult = ($age >= 18) ? 'Совершеннолетний' : 'Несовершеннолетний';

echo $ageresult;

echo '<br>'; //Новая строка

#Задача-№3: Проверка длины строки.
/*
Дана строка. Используя тернарный оператор, выведите "Короткая", если длина
строки меньше 10 символов, и "Длинная" в противном случае.
*/

$strlen = "hello";
$resultstr = (strlen($strlen) >= 10) ? "Длинная" : "Короткая";

echo $resultstr;

echo '<br>'; //Новая строка 

#Задача-№4: Проверка времени суток.
/*
Задайте переменную, представляющую час в 24-часовом формате. Используя тернарный оператор, определите, является ли это
"Днем" (с 6 до 18) или "Ночью".
*/

$hour = 14;
$rshour = ($hour >= 6 && $hour < 18) ? "День" : "Ночь";
echo $rshour;

echo '<br>'; //Новая строка 

#Задача-№5: Проверка пароля.
/*
Напишите условие для проверки введенного пароля. Используйте тернарный оператор, чтобы определить, верен ли пароль (если
равен заданному значению) и выведите "Доступ разрешен" или "Неверный пароль".
 */

$strchecking = "password";
$strresult = ($strchecking == "password") ? "Доступ разрешен" : "Неверный пароль";

echo $strresult;

echo "<br><br>"; //Новая строка


