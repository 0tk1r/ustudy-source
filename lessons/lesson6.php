<?php
# Massivlar menen islesiw (Массивы данных. Одномерные и многомерные)
// Massiv degenimiz ne - Massivti bizler o'zgeriwshi dep alsaqta boladi.
// Biraq o'zgeriwshilerden parqi, o'geriwshilerde bizler tekke 1 ma'nisti bere
// alamiz, al massivta bolsa bir neshe ma'nislerdi beremiz.

//Massivlerdin' tiykarinnan 3 tu'ri bar: 

//1) Простой Массивлар (A'piwayi Massivlar)
//2) Ассотсиатив Массивлар (Assotsiyativ Massivlar)
//3) Многомерный Массилар (Ko'p o'lshemli Massivlar)

// Простой Массивлар: (A'piwayi Massivlar Bir o'lshemli):
// array => massiv | (2, 4, 3, 21, 3, 10 ) - elementler.
// 2 sani bizlerde 1-element indeks nomeri 0;
// 4 bolsa bizlerde 2-element indeks nomeri 4;
// Massivtin jaratiliwi:
$nums = array(2, 4, 3, 21, 3, 10);
$nums[0] = 40;
echo $nums[0];

echo "<br><br>";

// Ассотсиатив Массивлар (Assotsiyativ Massivlar)
//Assotsiyativ massivlar indeks orninda yag'niy cifralar ornina  gilt so'zlerdi
// isletedi.Bul gilt so'zler arqali bizler elementlerge mu'rajat etemiz.

$assotsiyativ_massiv = array(
    "name" => "O'tkirbay",
    "age" => "19",
    "phonenum" => "907772233",
);
echo $assotsiyativ_massiv["age"]; // Bizlerge 19 shig'aradi.

echo "<br><br>";

//qisqartirilg'an formasi:
$assotsiyativ_massiv1 = [
    "name" => "Steve",
    "age" => "25",
    "phonenum" => "992321023",
];
echo $assotsiyativ_massiv1["name"]; // Bizlerge Steve ti shig'aradi.

echo "<br><br>";

//Многомерный Массилар (Ko'p o'lshemli Massivlar)
//Ko'p o'lshemli massivlar o'z ishine bir neshe massivlarlardi aladi
// ha'm ol massivlar ishinde tag'i massivlardi aladi, bunday massivler ko'p 
//o'lshemli massivler dep ataladi.

//Eki o'lshemli massiv dep ataladi:
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
echo $matrix[0][0]; // bizlerde 1 ekrang'a shig'aradi.

