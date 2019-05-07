<?php

header("Content-type:text/html;Charset=UTF-8");
$stu = new Student;

function f1 ($class_name) {
    if (file_exists('./' . $class_name . '.class.php')) {
        include './' . $class_name . './class.php';
    }else {
        echo '没有找到相关的类文件！<br />';
        return false;
    }
}
// 将f1函数注册成自动加载函数
spl_autoload_register('f1');

$stu = new Student;
var_dump($stu);