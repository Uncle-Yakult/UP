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
$sql = "select * from php_student";
// 5，执行sql语句
$stmt = $pdo->query($sql);  // 此时得到一个结果对象
echo '<pre>';

// 6，获取查询结果的总行数和总列数
$rowCount = $stmt->rowCount();
$columnCount = $stmt->columnCount();
echo "当前查询结果中一共有{$rowCount}行，{$columnCount}列！<br />";

// 7，获取结果集中的一条记录
var_dump($stmt->fetch(PDO::FETCH_ASSOC));
var_dump($stmt->fetch(PDO::FETCH_ASSOC));

// 返回索引数组
var_dump($stmt->fetch(PDO::FETCH_NUM));

// 返回索引和关联并存的混合数组
var_dump($stmt->fetch(PDO::FETCH_BOTH));
var_dump($stmt->fetch());

//返回一个对象
var_dump($stmt->fetch(PDO::FETCH_OBJ));

// 遍历结果集
$rows = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $rows[] = $row;
}
var_dump($rows);

$rows = $stmt->fetchAll();
// var_dump($rows);

// 遍历结果集
foreach ($rows as $row) {
    echo $row['id'],'&nbsp';
    echo $row['name'],'&nbsp';
    echo $row['gender'],'&nbsp';
    echo $row['class_id'],'&nbsp';
    echo $row['age'],'&nbsp';
    echo $row['home'],'&nbsp';
    echo $row['score'],'&nbsp';
    echo '<br />';
}