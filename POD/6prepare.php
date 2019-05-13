<?php

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

// 4，预处理
// 4.1 发送预处理语句
// $sql = "insert into php_student values (null, ?, ?, ?, ?, ?, ?)";
$sql = "insert into php_student values (null, :name, :gender, :class_id, :home, :score)";
$stmt = $pdo->prepare($sql);
echo '<pre>';
// var_dump($stmt);

// 4.2 绑定参数
// 先把每个参数保存到一个变量中
$name = '观世音';
$gender = 'famale';
$class_id = 23;
$age = 8000;
$home = '南海';
$score = 99;
// 使用数组绑定参数
$arr = array(
    ':name'     =>  $name,
    ':gender'   =>  $gender,
    ':class_id' =>  $class_id,
    ':age'      =>  $age,
    ':home'     =>  $home,
    ':score'    =>  $score
);
// 再使用bindParam方法绑定参数变量
$stmt->bindParam(':name',$name);  //这里1代表第1个数据占位符
$stmt->bindParam(':gender',$gender);
$stmt->bindParam(':class_id',$class_id);
$stmt->bindParam(':age',$age);
$stmt->bindParam('home',$home);
$stmt->bindParam('score',$score);

// 4.3 执行预处理语句
$result = $stmt->execute();
if ($result) {
    echo '预处理语句执行成功！';
}else {
    echo '预处理语句执行失败！';
}

// 4.3 执行预处理语句
$result = $stmt->execute($arr);
if ($result) {
    echo '预处理语句执行成功！';
}else {
    echo '预处理语句执行失败！';
}