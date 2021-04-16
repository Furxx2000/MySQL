<div>
    <?php
    $pass = '123456';
    $p1 = password_hash($pass, PASSWORD_DEFAULT);
    $p2 = password_hash($pass, PASSWORD_DEFAULT);

    echo "$p1 <br>";
    echo "$p2 <br>";

    echo password_verify('123457', $p1) ? 'yes<br>' : 'no<br>';
    echo password_verify($pass, $p2) ? 'yes<br>' : 'no<br>';

    ?>
    </div>
