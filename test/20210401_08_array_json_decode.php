<?php
$str = '{"name":"大衛","age":25,"gender":"male"}';

$ar = json_decode($str);

// var_dump($ar);

echo "<br> {$ar->name}";
echo "<br> {$ar->age}";

$ar2 = json_decode($str, true);

echo "<br> {$ar2['name']}";
echo "<br> {$ar2['age']}";