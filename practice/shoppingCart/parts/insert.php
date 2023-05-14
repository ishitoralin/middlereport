<?php
include './connectdb.php';


$sql = "INSERT INTO `order_cart`
(`member_sid`, `products_type_sid`, `item_sid`, 
`price`, `quantity`, `amount`, 
`created_at`) VALUES 
('?','?','?',
'?','?','?',
now())";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ''
])

echo $stmt->rowCount();
