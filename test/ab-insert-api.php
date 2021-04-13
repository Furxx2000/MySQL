<?php include __DIR__. './Parts/config.php';

$output = [
    'success' => false,
    'code' => 0,
    'error' => '資料沒有新增'
];

if(isset($_POST['name'])){

    $sql = "INSERT INTO `address_book`(
                           `name`, `email`, `mobile`, 
                           `birthday`, `address`, `created_at`
                           ) VALUES (
                                ?, ?, ?,
                                ?, ?, NOW()
                           )";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['name'],
        $_POST['email'],
        $_POST['mobile'],
        $_POST['birthday'],
        $_POST['address'],
    ]);

    if($stmt->rowCount()){
        $output['success'] = true;
        $output['error'] = '';
    } else {
        $output['error'] = '新增資料發生錯誤';
    }
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
