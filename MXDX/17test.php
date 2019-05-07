<?php

header("Content-type:text/html;Charset=UTF-8");
// 加载数据库工具类
include './MySQLDB.class.php';

// 实例化
$arr = array(
    'pass' => 'root',
    'dbname' => 'php4'
);
$db = new MySQLDB($arr);

echo '<pre>';
// var_dump($db);

$sql = "select * from php_student";
$res = $db->fetchAll($sql);
var_dump($res);
echo '<hr />';

$sql = "select * from php_student where name = '白骨精'";
$res = $db->fetchRow($sql);
var_dump($res);
echo '<hr />';

$sql = "select count(*) from php_student";
$res = $db->fetchColum($sql);
var_dump($res);
echo '<hr />';

$sql = "updata php_student set score = 99 where name = '白骨精'";
$res = $db->my_query($sql);
var_dump($res);