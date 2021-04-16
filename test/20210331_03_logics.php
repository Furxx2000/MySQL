<?php

echo 5 || 7;//bool

echo '<br>';

$a = 5 or $b = 6; // or的優先權比 = 還低

$c = 5 || ($d = 6); // || 的優先權比 = 還高

echo "\$a=$a, \$b=$b <br>";
echo "\$c=$c, \$d=$d <br>";
