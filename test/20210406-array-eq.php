<?php

$p1 = [
    'name' => 'Bill',
    'age' => 27,
    'gender' => 'male',
];

$p2 = $p1;
$p3 = &$p1;

$p1['name'] = '比爾';

echo '$p2: ';
echo json_encode($p2, JSON_UNESCAPED_UNICODE) . '<br>';
echo '$p1: ';
echo json_encode($p1, JSON_UNESCAPED_UNICODE) . '<br>';
echo '$p3: ';
echo json_encode($p3, JSON_UNESCAPED_UNICODE) . '<br>';