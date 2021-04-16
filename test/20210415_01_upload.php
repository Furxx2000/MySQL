<?php

if(isset($_FILES['avatar'])){
    echo json_encode($_FILES['avatar']);
}

/*
{
    "name": "1.png",
    "type": "image/png",
    "tmp_name": "C:\\xampp\\tmp\\php542D.tmp",
    "error": 0,
    "size": 49648
}
$_FILES['avatar']['name'];

// 上傳多個檔案
{
    "name": [
        "1.png",
        "3.png",
        "4.png"
    ],
    "type": [
        "image/png",
        "image/png",
        "image/png"
    ],
    "tmp_name": [
        "C:\\xampp\\tmp\\php7F73.tmp",
        "C:\\xampp\\tmp\\php7F74.tmp",
        "C:\\xampp\\tmp\\php7F75.tmp"
    ],
    "error": [
        0,
        0,
        0
    ],
    "size": [
        49648,
        39472,
        39932
    ]
}


 */
