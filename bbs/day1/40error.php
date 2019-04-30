<?php
header("Content-type:text/html;Charset= utf8");
$link = @ mysqli_connect("localhost:3306",'root','root','ecshop4');
if (!$link) {
    //数据库连接失败
    //给出相关的提示信息
    echo "数据连接失败！<br>";
    echo "错误的编号：",mysqli_errno(),"<br>";
    echo "错误的信息：",mysqli_error(),'<br>';
    die;
}

/**
 * 封装错误调试函数
 * @param string $sql 一条sql语句
 * @return mixed(true|resource) sql语句的执行结果
 */
function my_query($sql) {
    //先执行sql语句
    $result = mysqli_query($sql);
    //再判断执行的结果
    if (!$result) {
        //sql语句执行失败
        //给出相关的提示信息
        echo "SQL语句执行失败！<br>";
        echo "错误的编号：",mysqli_errno(),"<br>";
        echo "错误的信息：",mysqli_error(),'<br>';
        die;
    }
    //返回执行结果
    return $result;
}

$sql = "set names utf8";
$result = my_query($sql);

$sql = "select * from php_student";
$result = my_query($sql);

/**
 * 封装错误调试函数
 * @param mixed(bool|resource) $result
 */
/*function my_query($result) {
    if (!$result) {
        //sql语句执行失败
        //给出相关的提示信息
        echo "SQL语句执行失败！<br>";
        echo "错误的编号：",mysqli_errno(),"<br>";
        echo "错误的信息：",mysqli_error(),'<br>';
        die;
    }
}*/
