<?php
// include './connectdb.php';

$stmt = $pdo->query("SELECT * FROM order_cart");

$row = $stmt->fetch(PDO::FETCH_BOTH);

print_r($row);
