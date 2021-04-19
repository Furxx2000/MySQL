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

?>
<?php include __DIR__ . '/Parts/html.header.php'; ?>
<?php include __DIR__ . '/Parts/navBar.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="btn-group-vertical categories" role="group" style="width: 100%;" >
                <button type="button" class="btn btn-outline-primary" data-sid="0"
                        onclick="changeCate(0)">全部商品</button>
                <?php foreach($cate_rows as $c): ?>
                    <button type="button" class="btn btn-outline-primary" data-sid="<?= $c['sid'] ?>"
                            onclick="changeCate(<?= $c['sid'] ?>)"><?= $c['name'] ?></button>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="row">
                <div class="col">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row p-list">
            </div>

        </div>
    </div>
</div>

<?php include __DIR__. '/parts/scripts.php'; ?>
    <script>
        let cate =0;
        let page = 1;
        let pData = {}; //商品資料
        let categories = $('.categories button');
        const p_list = $('.p-list');
        const pagination = $('.pagination');

        const productTpl = o => {
                return `<div class="col-md-3">
            <div class="card" >
                <img src="/proj60/proj/img/small/${o.book_id}.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h6 class="card-title">${o.bookname}</h6>
                    <p><i class="fas fa-user-friends"></i> ${o.author}</p>
                    <p><i class="fas fa-dollar-sign"></i> ${o.price}</p>
                </div>
            </div>
        </div>
        `;
        }

        const pageBtnTpl = n => {
            return  `<li class="page-item ${ n===page ? 'active' : '' }">
                <a class="page-link" href="javascript: changePage(${n})">${n}</a>
            </li>
        `;
        }

        categories.click(function(){
            categories.removeClass('active');
            $(this).addClass('active');
        })

        function getProducts(){
            $.get('product-list-api.php', {cate, page}, function(data){
                pData = data;
                renderProducts();
                renderPagination();
            }, 'json');
        }

        categories.eq(0).click();

        function changeCate(c){
            cate = c;
            page = 1;
            getProducts();
        }
        function changePage(p){
            page = p;
            getProducts();
        }

        //產生商品畫面的區塊

        function renderProducts(){
            p_list.html('');
            if(pData.rows && pData.rows.forEach){
                pData.rows.forEach(el => {
                    p_list.append(productTpl(el));
                });
            }
        }

        function renderPagination(){
            pagination.html('');
            for(let i=1; i<=pData.totalPages; i++){
                pagination.append(pageBtnTpl(i));
            }
        }
    </script>

<?php include __DIR__. '/parts/html-footer.php'; ?>