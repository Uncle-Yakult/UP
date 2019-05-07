<?php

// 定义一个类
class Student {
    public $stu_name;
    public $stu_age;
    var $stu_money = 30000;
    public function showNum() {
        for ($i=1; $i<=10; $i++) {
            echo $i,'&nbsp;';
        }
    }
}

$stu1 = new Student;
echo '<pre>';
// 操作对象的属性
$stu1->stu_name = 'Tom';
$stu1->stu_age = 23;
$stu1->stu_money = 30000;
var_dump($stu1);

$stu2 = new Student;
echo '<pre>';
// 操作对象的属性
$stu2->stu_name = 'Jack';
$stu2->stu_age = 20;
$stu2->stu_money = 50000;
var_dump($stu2);

// 调用对象的方法
$stu1->showNum();