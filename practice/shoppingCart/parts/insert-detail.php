<?php
include './connectdb.php';
include './select.php';

$sql = "INSERT INTO `order_detail`
(`order_sid`, `member_sid`, `prduct_type_sid`, 
`item_sid`, `price`, `quantity`, 
`amount`) VALUES 
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
    $order_sid =;
    $member = random_int(1, 600); //會員id
    $type = random_int(1, 4); //產品類型
    $item = ($type === 1) ? $r['sid'] : random_int(1, 10); //產品or課程sid
    $qty = ($type === 1) ? intval(1) : random_int(1, 10); //數量
    $pp = random_int(1, 20) * 100; //實體產品的價格
    $amount = ($type === 1) ? $p : $qty * $pp; //總價
    $price = ($type === 1) ? $p : $pp; //判斷是lession price還是product price
    // 
    $stmt->execute([
        $order_sid,
        $member,
        $type,
        $item,
        $price,
        $qty,
        $amount,

    ]);
}
echo $stmt->rowCount();
