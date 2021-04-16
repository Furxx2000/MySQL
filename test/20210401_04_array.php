<pre>
    <?php
    $ar1 = [];

    for($i=1; $i<=42; $i++){
        $ar1[] = $i;
    }

    shuffle($ar1); //隨機排列, 弄亂

    echo implode('-', $ar1); // 接成字串
    ?>
</pre>

