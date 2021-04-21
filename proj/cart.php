<?php include __DIR__ . './Parts/config.php'; ?>
<?php
$title = '購物車';
$pageName = 'cart';

//if(empty($_SESSION['cart'])){
//    header('Location: product-list.php');  // 最好給個提示
//    exit;
//}




?>
<?php include __DIR__ . '/Parts/html.header.php'; ?>
<?php include __DIR__ . '/Parts/navBar.php'; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <?php if(empty($_SESSION['cart'])): ?>
            <div class="alert alert-danger" role="alert">
                目前購物車裡沒有商品，請至商品列表選購
            </div>
            <?php else: ?>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col"><i class="fas fa-trash-alt"></i></th>
                    <th scope="col">封面</th>
                    <th scope="col">書名</th>
                    <th scope="col">單價</th>
                    <th scope="col">數量</th>
                    <th scope="col">小計</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($_SESSION['cart'] as $v): ?>
                <tr data-sid="<?= $v['sid'] ?>">
                    <td>
                        <a href="javascript:" onclick="deleteItem(event)">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                    <td>
                        <img src="<?= WEB_ROOT ?>/proj/img/small/<?= $v['book_id'] ?>.jpg" class="card-img-top" alt="">
                    </td>
                    <td><?= $v['bookname'] ?></td>
                    <td class="price" data-price="<?= $v['price'] ?>"></td>
                    <td>
                        <select class="form-control quantity"
                                onchange="changeQty(event)"
                                data-qty="<?= $v['quantity'] ?>">
                            <?php for($i=1; $i<10; $i++): ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                            <?php endfor; ?>
                        </select>
                    </td>
                    <td class="sub-total"></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <?php endif; ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="alert alert-primary" role="alert">
                總計: <span class="totalPrice"></span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <?php if(isset($_SESSION['user'])): ?>
                <a class="btn btn-success" href="cart-confirm.php">結帳</a>
            <?php else: ?>
            <div class="alert alert-danger" role="alert">
                請登入會員後再結帳
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php include __DIR__ . '/Parts/scripts.php'; ?>
    <script>
        const quantity = $('select.quantity');
        // 金額轉換，加逗號
        const dallorCommas = function (n){
            return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        };

        function deleteItem(event){
            let me = $(event.currentTarget);
            let sid = me.closest('tr').attr('data-sid');


            $.get('cart-api.php', {action:'delete', pid: sid}, function(data){
                // location.reload();  //刷新頁面


                me.closest('tr').remove();

                if($('tbody>tr').length < 1){
                    location.reoload();  // 重新載入
                }
                showCartCount(data);
                calPrices();
            }, 'json');
        };

        const calPrices = function (){
            let total = 0;
            $('tbody>tr').each(function(){
                const $price = $(this).find('.price');
                const price = $price.attr('data-price') * 1;
                $price.text('$ ' + dallorCommas(price));

                const qty = $(this).find('.quantity').val() * 1;

                $(this).find('.sub-total').text('$ ' + dallorCommas(price * qty));
                total += price * qty;
            });
            $('.totalPrice').text('$ ' + dallorCommas(total));
        };

        const changeQty = function (event){
            const el = $(event.currentTarget);
            const qty = el.val();
            const pid = el.closest('tr').attr('data-sid');

            $.get('cart-api.php', {action:'add', pid, qty}, function(data){
                showCartCount(data);
                calPrices();
            }, 'json');
        };

    // document ready
        $(function (){
        //    呈現數量
            quantity.each(function(){
                const qty = $(this).attr('data-qty') * 1;
                $(this).val(qty);
            });

            calPrices();
        });

    </script>
<?php include __DIR__ . '/Parts/html-footer.php'; ?>