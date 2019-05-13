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
// 修改PDO为异常模式
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

// 对以下所有的代码进行监听
try{
    $sql = "select * from php_student8888";
    $stmt = $pdo->query($sql);
}catch (Exception $e) { // 捕获异常
    echo '错误的信息为：', $e->getMessage(), '<br />';
    echo '错误的代码为：', $e->getCode(), '<br />';
    echo '错误的脚本为：', $e->getFile(), '<br />';
    echo '错误的行号为：', $e->getLine(), '<br />';
}