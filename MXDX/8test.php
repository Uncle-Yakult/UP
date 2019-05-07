<?php
header("Content-type:text/html;Charset=UTF-8");

// 加载数据库工具类
include './MySQLDB.class.php';
$arr = array(
    'pass' => 'root',
    'dbname' => 'php4'
);

// 实例化对象
$db = new MySQLDB($arr);
echo '<pre>';
var_dump($db);