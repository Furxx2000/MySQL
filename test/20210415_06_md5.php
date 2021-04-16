<div>
    <?php
    $pass = '123456';
    $md5 = md5($pass);
    $sha1 = sha1($pass);
    echo "md5: $md5 <br>";
    echo "sha1: $sha1 <br>";

    echo "password_hash: ". password_hash($pass, PASSWORD_DEFAULT). "<br>";
    echo "password_hash: ". password_hash($pass, PASSWORD_DEFAULT). "<br>";

    ?>
</div>
