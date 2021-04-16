<div>
    <?php
    echo time(). '<br>';
    echo date("Y-m-d H:i:s"). '<br>';
    echo date("Y-m-d H:i:s", time() + 2592000). '<br>';
    echo date("Y-m-d H:i:s", time() + 60*60*24*60). '<br>';

    $t = strtotime('2021/04/20');
    echo $t. '<br>';
    echo date("Y-m-d H:i:s", $t). '<br>';
    ?>
</div>
