<?php

// 读文件
$data = file_get_contents('./13.txt');
// 将文件的数据反序列化
$data = unserialize($data);
var_dump($data);