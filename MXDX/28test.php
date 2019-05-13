<?php

include './MySQLDB.class.php';
$arr = array(
    'pass' => 'root',
    'dbname' => 'php4'
);
// 获得单例对象
$db1 = MySQLDB::getInstance($arr);
$db2 = MySQLDB::getInstance($arr);
echo '<pre>';
var_dump($db1,$db2);