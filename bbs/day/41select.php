<?php
header("content-type:text/html;charset=utf-8");
//加载数据库连接文件
include 'MySQLDB.php';

//准备sql语句
$sql = "select * from php_student";
//执行
$result = my_query($sql);

$rows = array();

//遍历提取资源结果集
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

//加载HTML模板文件
include '41select.html';
