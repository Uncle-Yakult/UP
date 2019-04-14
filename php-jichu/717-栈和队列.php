<?php
header('content-type:text/html;charset=utf-8');
//模拟栈
/*$stu=array();
array_push($stu,'寒冰');
array_push($stu,'维鲁斯','薇恩','奥巴马');//一次可以多个入栈
print_r($stu);
echo '<hr>';
array_pop($stu);    //出栈一个
array_push($stu,'寒冰');
print_r($stu);*/

//模拟队列
$stu=array();
array_push($stu,'寒冰','维鲁斯','薇恩','奥巴马');
print_r($stu);
echo '<hr>';
array_shift($stu);  //出队列一个
print_r($stu);
echo '<hr>';
array_unshift($stu,'tom');  //在头部插入一个单元
?>