<?php include __DIR__ . './Parts/config.php'; ?>
<?php
$title = '修改資料';
$pageName = 'ab-edit';

$sid = intval($_GET['sid']);
$sql = "SELECT * FROM address_book WHERE `sid`=$sid";

$row = $pdo->query($sql)->fetch();
if(empty($row)){
    header('Location: ab-list.php');
    exit;
}


?>

<?php include __DIR__ . './Parts/html.header.php'; ?>
<?php include __DIR__ . './Parts/navBar.php'; ?>
    <style>
        form .form-group small.error {
            color: #ff0000;
        }
    </style>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">修改資料</h5>

                    <form name="form1" method="post" novalidate onsubmit="checkForm(); return false;">
                        <input type="hidden" name="sid" value="<?= $row['sid'] ?>">
                        <div class="form-group">
                            <label for="name">姓名
                            </label>
                            <input type="text" class="form-control" id="name" name="name" required
                            value="<?= htmlentities($row['name']) ?>">
                            <small class="form-text error"></small>
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                   value="<?= htmlentities($row['email']) ?>">
                            <small class="form-text error"></small>
                        </div>
                        <div class="form-group">
                            <label for="mobile">手機</label>
                            <input type="text" class="form-control" id="mobile" name="mobile"
                                   value="<?= htmlentities($row['mobile']) ?>"
                            pattern="09\d{2}-?\d{3}-?\d{3}">
                            <small class="form-text error"></small>
                        </div>
                        <div class="form-group">
                            <label for="birthday">生日</label>
                            <input type="date" class="form-control" id="birthday" name="birthday"
                                   value="<?= htmlentities($row['birthday']) ?>>

                        </div>
                        <div class="form-group">
                            <label for="address">地址</label>
                            <textarea class="form-control" name="address" id="address" cols="30" rows="3"><?= htmlentities($row['address']) ?></textarea>

                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . './Parts/scripts.php'; ?>
    <script>
        const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        const mobile_re = /^09\d{2}-?\d{3}-?\d{3}$/;
        const $name = $('#name'),
            $email = $('#email'),
            $mobile = $('#mobile');
        const fields = [$name, $email, $mobile];

        function checkForm() {

            fields.forEach(el=>{
                el.css('border', '1px solid #cccccc');
                el.next().text('');
            });

            let isPass = true;

            if($name.val().length < 2){
                isPass = false;
                $name.css('border', '1px solid red');
                $name.next().text('請輸入正確的姓名');
            }
            if(! email_re.test($email.val())){
                isPass = false;
                $email.css('border', '1px solid red');
                $email.next().text('請輸入正確的email');
            }
            if(! mobile_re.test($mobile.val())){
                isPass = false;
                $mobile.css('border', '1px solid red');
                $mobile.next().text('請輸入正確的手機號碼');
            }

            if(isPass){
                $.post(
                    'ab-edit-api.php',
                    $(document.form1).serialize(),
                    function(data){
                        if(data.success){
                            alert('資料修改成功');
                        } else {
                            alert(data.error);
                        }
                    },
                    'json'
                )
            }

        }
    </script>
<?php include __DIR__ . './Parts/html-footer.php'; ?>