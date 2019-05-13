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

// 4，PDO事务操作
// 4.1 开启事务
$pdo->beginTransaction();
// 4.2 执行事务中的一组sql语句
// 设置一个变量，用来判断所有的sql语句是否执行成功
$flag = true;
$sql = "updata student set money = money + 1000 where name = '李四'";
$result = $pdo->exec($sql);
if (!$result) {
    $flag = false;
}
$sql = "updata student set money = money - 1000 where name = '张三'";
$result = $pdo->exec($sql);
if (!$result) {
    $flag = false;
}
// 4.3 判断事务是否执行成功
if ($flag) {
    // 所有的sql语句执行成功，应该立即生效commit
    $pdo->commit();
    echo '你大爷的终于还钱了！';
}else {
    // 说明至少一条sql语句执行失败
    $pdo->rollBack();
    echo '还钱失败！';
}