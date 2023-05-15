<?php
include './connectdb.php';
include './select.php';

$sql = "INSERT INTO `order_main`
(`member_sid`, `member_coupon_relation_sid`, `amount`, 
`buy_time`, `pay_time`, `method_sid`, 
`payment`) VALUES 
(?,
?,
?,
?,
?,
?,
?)";
$stmt = $pdo->prepare($sql);

for ($x = 1; $x <= 10; $x++) {
    $i = random_int(1, 10);
    foreach ($rows_input as $r) {
        // print_r($i . "<\br>");
        if (intval($r['sid']) === $i) {
            // print_r($r["price"]);
            $p = $r["price"];
        }
    }
    // print_r($a);
    shuffle($rows_member);
    $member = random_int(1, 600); //會員id

    $type = random_int(1, 4); //產品類型
    $item = ($type === 1) ? $r['sid'] : random_int(1, 10); //產品or課程sid
    $qty = ($type === 1) ? intval(1) : random_int(1, 10); //數量
    $pp = random_int(1, 20) * 100; //實體產品的價格
    $amount = ($type === 1) ? $p : $qty * $pp; //總價
    // 
    $t = rand(strtotime('2010-01-01 00:00:00'), strtotime('2023-05-15 00:00:00'));
    $t2 = $t + random_int(3600, 259200);
    $bt = date('Y-m-d H:i:s', $t); //下單時間
    $pt = date('Y-m-d H:i:s', $t2); //付款時間
    // 
    $method = random_int(1, 5); //付款方式
    $pay = random_int(0, 1);
    // $payment = ($pay) ? 1 : 0; //是否付款
    // 
    $stmt->execute([
        $member,
        null,
        $amount,
        $bt,
        $ifpay = ($pay === 1) ? $pt : null,
        $method,
        $pay,
    ]);
}
echo $stmt->rowCount();
