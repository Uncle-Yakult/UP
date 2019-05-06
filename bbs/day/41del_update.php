<?php
header("content-type:text/html;charset=utf-8");
//加载数据库连接文件
include 'MySQLDB.php';

//准备sql语句
$sql = "delete from php_student where name='玉兔'";
//执行
$result = my_query($sql);

if ($result) {
    echo '删除了',mysqli_affected_rows(),'行记录！';
}else{
    echo '删除失败';
}