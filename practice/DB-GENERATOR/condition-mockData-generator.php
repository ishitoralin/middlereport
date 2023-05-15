<?php
require './connect-db.php';

$sql = "INSERT INTO `record_condition`
(`member_sid`, `height`, `weight`, `bodyfat`, `record-time`)
VALUES
(?,?,?,?,?)";

$stmt = $pdo->prepare($sql);

$memberSid = 2;

for ($i = 0; $i < 15; $i++) {
    $height = rand(1800, 1810) / 10;
    $weight = rand(750, 770) / 10;
    $bodyfat = rand(200, 220) / 10;
    $t = rand(strtotime('2023-01-01'), strtotime('2023-05-11'));
    $recordTime = date('Y-m-t', $t);
    // echo $recordTime;

    $stmt->execute([
        $memberSid,
        $height,
        $weight,
        $bodyfat,
        $recordTime,
    ]);
}

echo json_encode([
    $stmt->rowCount(), // 影響的資料筆數
    $pdo->lastInsertId(), // 最新的新增資料的主鍵
]);

// =====================================================================

/*
https://www.ntdtv.com/b5/2017/05/14/a1324156.html


let d = `01李 02王 03張 04劉 05陳 06楊 07趙 08黃 09周 10吳
11徐 12孫 13胡 14朱 15高 16林 17何 18郭 19馬 20羅
21梁 22宋 23鄭 24謝 25韓 26唐 27馮 28於 29董 30蕭
31程 32曹 33袁 34鄧 35許 36傅 37沈 38曾 39彭 40呂`.split('').sort().slice(119);
JSON.stringify(d);

// ---------------------
https://freshman.tw/namerank

let ar = [];
$('table').eq(0).find('tr>td:nth-of-type(2)').each(function(i, el){
    ar.push(el.innerText);
});
$('table').eq(1).find('tr>td:nth-of-type(2)').each(function(i, el){
    ar.push(el.innerText);
});
JSON.stringify(ar);

// -------------------
https://www.president.gov.tw/Page/106
let ar = [];
$('.btn.btn-default.alluser').each(function(i, el){
    ar.push(el.innerText);
});
JSON.stringify(ar);

*/