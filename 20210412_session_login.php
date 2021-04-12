<?php include __DIR__ . './test/Parts/config.php'; ?>
<?php
$title = '登入';

if(isset($_POST['account']) and isset($_POST['password'])){
    if($_POST['account']=='danny' and $_POST['password']=='12345'){
        $_SESSION['account'] = 'danny';
    } else {
        $msg = '帳號或密碼輸入錯誤';
    }
}

?>
<?php include __DIR__ . './test/Parts/html.header.php'; ?>
<?php include __DIR__ . './test/Parts/navBar.php'; ?>
    <div class="container">
        <div class="row">
                <?php if(isset($msg)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $msg ?>
                    </div>
                <?php endif; ?>

                <?php if(isset($_SESSION['account'])): ?>
                    <div class="alert alert-success" role="alert">
                        <?= $_SESSION['account']. ' 您好' ?>
                    </div>
                    <div><a href="20210412_session_login.php">登出</a></div>
                <?php else: ?>

                    <div class="col-md-6">
                        <form name="form1" method="post">
                            <div class="form-group">
                                <label for="account">account address</label>
                                <input type="text" class="form-control" id="account" name="account">

                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password"
                                       name="password">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>


                    </div>
            <?php endif; ?>
        </div>
    </div>

<?php include __DIR__ . './test/Parts/scripts.php'; ?>
<?php include __DIR__ . './test/Parts/html-footer.php'; ?>