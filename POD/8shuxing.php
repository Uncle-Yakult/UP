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
// 设置PDO相关属性
$pdo->setAttribute(PDO::ATTR_CASE,PDO::CASE_UPPER);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

// 4，返回结果集资源
$sql = "select * from php_student8888";
$stmt = $pdo->query($sql);
// $rows = $stmt->fetchAll();
echo '<pre>';
// var_dump($rows);