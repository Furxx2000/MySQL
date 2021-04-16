<?php include __DIR__. '/Parts/config.php'; ?>
<?php
$title = '登入';
if(isset($_POST['account']) and isset($_POST['password'])){
    if($_POST['account']=='root' and $_POST['password']==''){
        $_SESSION['account'] = 'root';
    } else {
        $msg = '帳號或密碼錯誤';
    }
}

?>
<?php include __DIR__. '/Parts/html.header.php'; ?>
<?php include __DIR__. '/Parts/navBar.php.php'; ?>
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
            <div><a href="20210412-08-logout.php">登出</a></div>
        <?php else: ?>
            <div class="col-md-6">
                <form name="form1" method="post">
                    <div class="form-group">
                        <lable for="account">account address</lable>
                        <input type="text" class="form-control" id="account" name="account">

                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php include __DIR__. '/Parts/scripts.php.php'; ?>
<?php include __DIR__. '/Parts/html-footer.php.php'; ?>