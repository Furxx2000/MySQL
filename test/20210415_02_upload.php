<?php

$output = [];

if(isset($_FILES['avatar'])){
    $output['file'] = $_FILES['avatar'];
    $fname =  __DIR__. '/imgs/'. $_FILES['avatar']['name'];
    $output['m'] = move_uploaded_file($_FILES['avatar']['tmp_name'], $fname);
    echo json_encode($output);
}

/*
 * 檔名會有重複的問題: 使用隨機的檔名
 * 檔案類型: 可以用 mimetype 去篩選
 *
 */
