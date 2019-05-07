<?php

// $data = 'itcast-php';
// $data = true;
$data = array(
    'name' => 'Tom',
    'age' => 23,
    'height' => 178.5
);
// 将原始数据序列化
$data = serialize($data);
// 向文件中写入数据
echo file_put_contents('./13.txt',$data);