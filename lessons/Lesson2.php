<?php
# Matematikaliq a'meller menen islesiw (Математические действия).

$x = 10;
$y = 20;

echo $x + $y . "<br>"; // [+] Bul bizlerde qosiw ameli. yag'niy o'zgeriwshi x ti y ke qosip atir ha'm oni ekrang'a shig'arip atir. Na'tiyje: 30
echo $x - $y . "<br>"; // [-] Bul bizlerde aliw(ayiriw) ameli. yag'niy o'zgeriwshi x ti y ten alip atir ha'm oni ekrang'a shig'arip atir. Na'tiyje: -10
echo $x * $y . "<br>"; // [*] Bul bizlerde ko'beytiw ameli. yag'niy o'zgeriwshi x ti y ke ko'beytip atir ha'm oni ekrang'a shig'arip atir. Na'tiyje: 200
echo $x / $y . "<br>"; // [/] Bul bizlerde bo'liw ameli. yag'niy o'zgeriwshi x ti y ke bo'lip atir ha'm oni ekrang'a shig'arip atir. Na'tiyje: 0.5
echo $x % $y . "<br>"; // [%] Bul bizlerde bo'liw arqali qaldiqti aliw ameli. yag'niy o'zgeriwshi x ti y ke bo'lip qaldiq sandi alip atir ha'm oni ekrang'a shig'arip atir. Na'tiyje: 10

//Bir o'zgeriwshi ustinde qisqartirilg'an a'meller.

$x += 10 . "<br>"; // Bul bizge 10+10=20 na'tiyjesin beredi.
$x -= 10 . "<br>"; // Bul bizge 10-10=0 na'tiyjesin beredi.
$x *= 10 . "<br>"; // Bul bizge 10*10=100 na'tiyjesin beredi.
$x /= 10 . "<br>"; // Bul bizge 10/10=1 na'tiyjesin beredi.
$x %= 10 . "<br>"; // Bul bizge 10/10 bo'lip qaldiq sandi aladi na'tiyjege. qaldiq san = 0.

echo "<br><br>";

// инкремент и декремент
 //Инкремент:
    //Постфиксная форма 
    $x++; /* ten' */ $x += 1;
    //Префиксная форма
    ++$x; /* ten' */ $x += 1;
 //Дикремент:
    //Постфиксная форма 
    $x--; /* ten' */ $x -= 1;
    //Префиксная форма
    --$x; /* ten' */ $x -= 1;
    
// Встроенные значение(константы):

 echo M_PI . "<br>"; // Число Пи 3.15...
 echo M_E . "<br>"; // Число Е 2.71...

// Встроенные математические функции:
//Коп колланылатугын функциялар:

 abs(); //бул функция бызге санды модуллап береды. мысалы: -2 => 2.
 mt_rand(); //бул функция бызге случаиный число береды белгылы быр диапазонда. мысалы: mt_rand(1, 20); бул 1 ден 20 нын аралыгы
 min(2, 4, 90, 1, 6, 8, 64, 23); // бул функция бызге ен кышы число ны береды.
 max(1, 2, 7, 4, 6,); // бул функция бызге ен улкен число ны береды.