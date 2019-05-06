<?php
header("content-type:text/html;charset=utf-8");
extract($_POST);
echo '<pre>';
//var_dump($user,$age,$gender,$hobby,$password);

//数据库连接
$config = mysqli_connect("localhost",'root','root','ecshop4');
if (mysqli_connect_errno($config))
{
    echo "连接 MySQL 失败: " . mysqli_connect_error();
}

//将$hobby转换为一个字符串
$hobby = implode(',',$hobby);
$password = md5($password);
$sql = "insert into user values (null,'$user',$age,'$gender','$hobby','$password')";

$result = mysqli_query($config,$sql);

if ($result) {
    echo "注册成功!";
}else{
    echo "注册失败!";
}

mysqli_close($config);