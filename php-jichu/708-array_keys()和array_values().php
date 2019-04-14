<?php
header('content-type:text/html;charset=utf-8');
$stu=array('name'=>'李白','sex'=>'男','age'=>20);
$key=array_keys($stu);//获取所有的键
$values=array_values($stu);//获取所有的值
print_r($key);
echo '<br>';
print_r($values);
?>
