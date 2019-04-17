<?php
header('content-type:text/html;charset=utf-8');
class Student {
}
$stu1 = new Student();
var_dump($stu1);echo '<br>';
echo '<br>';
$stu2 = $stu1;    //$stu1的地址赋给$stu2，$stu1和$stu2指向同一个对象
var_dump($stu2);echo '<br>';
$stu3 = clone $stu1;        //克隆一个新的对象
var_dump($stu3);echo '<br>';
?>