<?php
include './connectdb.php';

$stmt = $pdo->query("SELECT sid,price FROM c_l_lession");

$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($row);
