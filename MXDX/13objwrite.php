<?php

header("Content-type:text/html;Charset=UTF-8");

$arr = array(
    'pass' => 'root',
    'dbname' => 'php4'
);
$data = new MySQLDB($arr);
function __autoload($class_name) {
    if (file_exists('./' . $class_name . '.class.php')) {
        include './' . $class_name . '.class.php';
    }else {
        echo '没有找到相关的类文件！<br />';
        return false;
    }
}
echo '<pre>';
var_dump($data);

// 写入文件
file_put_contents('./13obj.txt',$data);