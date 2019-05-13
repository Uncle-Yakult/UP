<?php

/**
 * 利用PDO对象实现MySQL的增删改的操作
 */
echo "<meta charset=UTF-8>";
// 1，设置数据源相关参数
$dbms = 'mysql';    // 选择mysql数据库
$host = 'localhost';
$port = '3306';
$dbname = 'php4';
$charset = 'UTF8';
$dsn = "$dbms:host=$host;port=$port;charset=$charset;dbname=$dbname";
// 2，设置用户名和密码
$user = 'root';
$pass = 'root';
// 3，实例化PDO类
$pdo = new PDO($dsn,$user,$pass);

// 4，准备sql语句
$sql = "delete from php_student where id>70";
// $sql = "insert into php_student values(null,'如来','male',23,10000,'西天',100)";

// 5，执行并返回结果
$result = $pdo->exec($sql);
if ($result) {
    // echo '插入成功，最后一条记录的id号为：',$pdo->IastInsertId();
    echo '删除成功！一共删除了',$result,'条记录！';
}else {
    echo '插入失败';
}