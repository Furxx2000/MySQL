<?php

require __DIR__ . './test/Parts/_connect_db.php';

$stmt = $pdo->query('SELECT * FROM address_book');

//$row = $stmt->fetch(both);
//
//echo json_encode($row);

while($row = $stmt->fetch()){
    echo "{$row['name']} <br>";
}
