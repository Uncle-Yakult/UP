<?php
header("content-type:text/html;charset=utf-8");
//加载数据库连接文件
include 'MySQLDB.php';

//准备sql语句
$sql = "insert into php_student values (null,'吴刚','male',21,30,'月宫',90)";
//执行
$result = my_query($sql);

if ($result) {
    echo '插入成功！新纪录的ID号为：',mysqli_insert_id();
    echo '<br>插入了',mysqli_affected_rows(),'行记录！';
}else{
    echo '插入失败';
}