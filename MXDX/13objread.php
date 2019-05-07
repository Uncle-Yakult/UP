<?php

// 读文件
$data = file_get_contents('./13obj.txt');
// 加载MySQLDB类的类文件
// include './MySQLDB.class.php';
function __autoload($class_name) {
    if (file_exists('./' . $class_name . '.class.php')) {
        include './' . $class_name . '.class.php';
    }else {
        echo '没有找到相关的类文件！<br />';
        return false;
    }
}
// 将文件的数据反序列化
$data = unserialize($data);
echo  '<pre>';
var_dump($data);

// 操作数据库
// 连接数据库
$data->my_connect();
$sql = "show databases";
$result = my_query($sql);
var_dump($result);