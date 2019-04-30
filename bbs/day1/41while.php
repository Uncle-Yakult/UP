<?php
header("content-type:text/html;charset=utf-8");
//加载数据库连接文件
include 'MySQLDB.php';

//准备sql语句
$sql = "select * from php_student";
//执行
$result = my_query($sql);

//加载HTML模板文件
include '41while.html';