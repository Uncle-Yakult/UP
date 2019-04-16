<?php
header('content-type:text/html;charset=utf-8');
/*
require 'Books.class.php';
require 'Goods.class.php';
require 'Phone.class.php';
*/

$book=new BooksLib();
$phone=new PhoneLib();
$book->setName('PHP入门与精通');
$phone->setName('诺基亚2100');
$book->getName();
$phone->getName();

//自动加载类
/*
function __autoload($class_name) {
    require "./{$class_name}.class.php";
}
*/

//将类的地址映射到数组中加载
/*
function __autoload($class_name) {
    $map = array(
        'Goods' => './aa/Goods.class.php',
        'Books' => './bb/Books.class.php',
        'Phone' => './cc/Phone.class.php'
    );
    require $map[$class_name];
}
*/

//通过命名规则加载类
function __autoload($class_name) {
    if (substr($class_name,-3)=='Lib'){
        require "./Lib/{$class_name}.class.php";
    }
}
?>
