<?php include __DIR__ . './Parts/config.php'; ?>
<?php
$title = '商品列表';
$pageName = 'product-list';

//分類
$c_sql = "SELECT * FROM categories WHERE parent_sid=0";
$cate_rows = $pdo->query($c_sql)->fetchAll();

$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0;
$qs = [];
$where = ' WHERE 1 ';
if(! empty($cate)){
    $where .=" AND category_sid=$cate";
    $qs['cate'] = $cate;
}


//取得總比數、總頁數、該頁的商品資料

$perPage = 4; //每一頁有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; //用戶要看第幾頁的商品

$t_sql = "SELECT COUNT(1) FROM products $where";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$totalPages = ceil($totalRows/$perPage);

if($page < 1) $page=1;
if($page>$totalPages) $page=$totalPages;

$p_sql = sprintf("SELECT * FROM products $where LIMIT %s, %s", ($page-1)*$perPage, $perPage);

$rows = $pdo->query($p_sql)->fetchAll();

echo json_encode([
    'perPage' => $perPage,
    'cate' => $cate,
    'page' => $page,
    'totalRows' => $totalRows,
    'totalPages' => $totalPages,
    'rows' => $rows,
], JSON_UNESCAPED_UNICODE);
