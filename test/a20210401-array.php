<?php
$arr = [
        'name' => 'Bill',
        'age' => '27',
        'gender' => 'male',
];

$arr2 = [2, 4, 6, 8, 10];

foreach($arr as $k => $v){
    echo "$k : $v<br>";
}

foreach($arr2 as $k => $v){
    echo "$k : $v<br>";
}

$ar = array(9, 5, 2, 'abc', true, false);
for($i = 0; $i < count($ar); $i++){
    echo " ${ar[$i]} <br />";
}

$arr3 = [1, 2, 3];
$arr3 = [4, 5, 6];

foreach($arr3 as $v){
    echo "$v <br />";
}




