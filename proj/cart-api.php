<?php include __DIR__ . './Parts/config.php';

if(! isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}


//// 1.列表, 2.加入, 3.變更數量, 4.移除項目
//// 1.list, 2.add, 3.update, 4.delete

$action = isset($_GET['action']) ? $_GET['action'] : 'list'; //操作的動作
$pid = isset($_GET['pid']) ? intval($_GET['pid']) : 0; //商品id
$qty = isset($_GET['qty']) ? intval($_GET['qty']) : 0; //數量

switch($action){
    case 'update':
    case 'add':
        if(! empty($pid)){
            if($qty > 0) {

                // 購物車內已經有這個商品資料
                if(! empty($_SESSION['cart'][$pid])){
                    $_SESSION['cart'][$pid]['quantity'] = $qty;
                } else {

                    //如果是新加入的商品
                    $sql = "SELECT * FROM products WHERE sid=$pid"; //查詢資料表
                    $row = $pdo->query($sql)->fetch(); //撈出一筆資料

                    if(! empty($row)){
                        $row['quantity'] = $qty; //把數量加入
                        $_SESSION['cart'][$row['sid']] = $row; //放到購物車裡
                    }
                }

            } else{
                unset($_SESSION['cart'][$pid]);  //移除該項商品
            }
        }
        break;
    case 'delete':
        if(! empty($pid)){
            unset($_SESSION['cart'][$pid]); //移除該項商品
        }
        break;

    default:
    case 'list':
}

echo json_encode($_SESSION['cart'], JSON_UNESCAPED_UNICODE);
?>


