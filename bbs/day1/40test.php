<?php
header("content-type:text/html;charset=utf-8");
//加载数据库连接文件
include 'MySQLDB.php';

$sql = "select * from php_student";
$result = my_query($sql);

$rows = array();
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}
echo "<pre>";
var_dump($rows);