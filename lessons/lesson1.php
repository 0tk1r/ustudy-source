<?php
# O'zgeriwshiler ha'm olardin' tipleri (Переменные и их типы данных).

// O'zgeriwshiler degenimiz ne - O'zgeriwshiler kompyuter yacheykasindag'i qandayda
// bir kishi yad (память) dep alamiz. Og'an bizler ma'gliwmatlardi kiritemiz ha'r turli
// stringlar (Строкалар), intlar (числолар), boolean (Логичиские данные), ha'm bul mag'liwmatlardi
// keyinrek o'zgerte alamiz. Bul o'zgeriwshilerdi keyin ala matematikaliq ameller islewimiz, qatarlardi
// ekranga shigariw xizme
// $o'zgeriwshi = tipi;

//O'zgeriwshini ekrang'a shig'ariw 

$number = 10;
echo $number;

//Eki o'zgeriwshini bir waqitta (bir operator menen) shig'ariw.

$a = 20;
$b = 2;

echo $a . $b;

// Logikaliq a'meller boolean, bool. 
// Logikaliq a'meller bolip atirg'an procceste processtin' shin(true, 1) yaki jalg'an(false, 0) ekenligin tekserip beredi.

$bool = false; // jalg'an
$boolean = true; // shin

// O'zgeriwshilerdin' tipleri:
 $number = 5; // int // Диапазон чисел: // -9,223,372,036,854,775,808 // +9,223,372,036,854,775,807 // 64-bit
 $num = 4.5;  // float // Диапазон чисел: // 1,7976931348623157E+308 // 2,22507385072014E-308 // 64-bit
 $str = "hello" // string 
 $bool = false // boolean

// "php" tilinde bizler o'zgeriwshilerge tiplerin bermeymiz. o'zgeriwshiler alg'an ma'nisine qaray 
//o'zi tipin belgileydi.

//qosimsha funkciyalar:
//floatval() - bizlerde o'zgeriwshini float tipine alip keledi.
//intval()  - bizlerde o'zgeriwshini int' tipine alip keledi.
//boolval() - bizlerde o'zgeriwshini bool tipine alip keledi.
//strval() - bizlerde o'zgeriwshini string tipine alip keledi.

// Constantalar menen islesiw.
//Constantalar - bul o'zgeriwshiler siyaqli, biraq constantalarda bir marte ma'nis beremiz
//keyin ala o'zgerte almaymiz. Al o'zgeriwshilerde  bolsa kerisinshe.

// Constantalardi jaratiwda bizler "define()" funkciyasinnan paydalanamiz.
// define(name_const, meaning);

//Misali:

 define(MY_AGE, 19);
 echo MY_AGE . "</br>";