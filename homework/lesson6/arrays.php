<?php
// №1
$array = [1, 2, 3, 4, 5];
foreach ($array as $key => $value) {
    echo "Key: $key, Val: $value. <br>";
}
// №2
$days = [
    "Monday" => 1,
    "Tuesday" => 2,
    "Wednesday" => 3,
    "Thursday" => 4,
    "Friday" => 5,
    "Saturday" => 6,
    "Sunday" => 7,
];
echo $days["Monday"];
// №3
$arrays = [
    $user1 = [
        "name" => "Otkirbay",
        "age" => "19",
        "status" => "Backend dev",
    ],
    $user2 = [
        "name" => "Ruslan",
        "age" => "19",
        "status" => "Fronted dev",
    ],
    $user3 = [
        "name" => "Azamat",
        "age" => "21",
        "status" => "UX / UI des",
    ],
];
echo $arrays[0][1];
