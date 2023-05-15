<?php
$x = random_int(1, 2);
$a = random_int(11, 13);
$b = random_int(17, 19);
$c = ($x === 1) ? $a : $b;
$booking_time = "{$c}:00";
// print_r($booking_time);


$a = [
    11,
    12,
    13,
    17,
    18,
    19,
];
shuffle($a);
// print_r($a[0]);


// for ($x = 1; $x <= 500; $x++) {
//     $i = random_int(1, 10);
//     foreach ($rows_input as $r) {
//         // print_r($i . "<\br>");
//         if (intval($r['sid']) === $i) {
//             // print_r($r["price"]);
//             $p = $r["price"];
//         }
//     }
// }


$t = rand(strtotime('2010-01-01 00:00:00'), strtotime('2023-05-15 00:00:00'));
$t2 = $t + random_int(3600, 259200);
$bt = date('Y-m-d H:i:s', $t); //下單時間
$pt = date('Y-m-d H:i:s', $t2); //付款時間
// print_r($bt . '</br>');
// print_r($t);
// exit;
