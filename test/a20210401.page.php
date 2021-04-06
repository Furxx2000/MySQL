<?php
$persons = [
    [
        'name' => 'Bill',
        'age' => 27,
        'gender' => 'male',
    ],
    [
        'name' => '大衛',
        'age' => 25,
        'gender' => 'male',
    ],
    [
        'name' => 'Flora',
        'age' => 22,
        'gender' => 'female',
    ],
    [
        'name' => 'Mary',
        'age' => 28,
        'gender' => 'female',
    ]
];

echo json_encode($persons, JSON_UNESCAPED_UNICODE);


