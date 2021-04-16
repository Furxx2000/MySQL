<?php include __DIR__. './Parts/config.php';

$sid = intval($_GET['sid']);

$come_from = $_SERVER['HTTP_REFERER'] ?? 'ab-list.php';

if(! empty($sid)){
    $sql = "DELETE FROM `address_book` WHERE `sid`=$sid";
    $pdo->query($sql);
}

header('Location: '. $come_from);
