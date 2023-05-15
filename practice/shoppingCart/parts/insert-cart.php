<?php
include './connectdb.php';
include './select.php';

$sql = "INSERT INTO `order_cart`
(`member_sid`, `products_type_sid`, `item_sid`, 
`price`, `quantity`, `amount`, 
`created_at`) VALUES 
(?,
?,
?,
?,
?,
?,
?)"; //表格製作時間created_at，以後改為now()
$stmt = $pdo->prepare($sql);

for ($x = 1; $x <= 10; $x++) {
    //取課程陣列的sid % price
    $i = random_int(1, count($rows_input));
    $p = $rows_input[$i - 1]['price'];

    shuffle($rows_member);
    $member = $rows_member[0]['sid']; //會員id
    $type = random_int(1, 4); //產品類型
    $item = ($type === 1) ? $rows_input[$i - 1]['sid'] : random_int(1, 10); //產品or課程sid
    $qty = ($type === 1) ? intval(1) : random_int(1, 10); //數量
    $pp = random_int(1, 20) * 100; //實體產品的價格
    $amount = ($type === 1) ? $p : $qty * $pp; //總價
    $price = ($type === 1) ? $p : $pp; //判斷是lession price還是product price

    //表格製作時間，以後改為now()
    $t = rand(strtotime('2010-01-01 00:00:00'), strtotime('2023-05-15 00:00:00'));
    $time = date('Y-m-d H:i:s', $t);

    $stmt->execute([
        $member,
        $type,
        $item,
        $price,
        $qty,
        $amount,
        $time,
    ]);
}
echo $stmt->rowCount();
