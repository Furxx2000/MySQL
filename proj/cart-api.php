<?php include __DIR__ . './Parts/config.php';

if(! isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}

$output = [];

//// 1.列表, 2.加入, 3.變更數量, 4.移除項目
//// 1.list, 2.add, 3.update, 4.delete

$action = isset($_GET['action']) ? $_GET['action'] : 'list'; //操作的動作
$pid = isset($_GET['pid']) ? intval($_GET['pid']) : 0; //商品id
$qty = isset($_GET['qty']) ? intval($_GET['qty']) : 0; //數量

switch($action){
    case 'add':
        $_SESSION['cart'][$pid] = $qty;

        break;
    case 'update':
        break;
    case 'delete':
        break;

    default:
    case 'list':

        break;
}
$output['cart'] = $_SESSION['cart'];
echo json_encode($output, JSON_UNESCAPED_UNICODE);
?>


