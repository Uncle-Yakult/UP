<?php

header("Content-type:text/html;Charset=utf-8");
// 定义一个类
class Student {
    public $stu_name;
    public $stu_age;
    public $stu_money;
    /**
     * 定义一个方法，可以完成自我介绍功能
     */
    public function introduce($stu) {   //$stu代表一个对象
        echo '大家好，我叫',$stu->stu_name,',我今年',$stu->stu_age,'岁，很高兴见到大家！<br />';
    }
}

$stu1 = new Student;
// 操作对象的属性
$stu1->stu_name = '鸣人';
$stu1->stu_age = 21;
$stu1->stu_money = 30000;
$stu1->introduce($stu1);

$stu2 = new Student;
// 操作对象的属性
$stu2->stu_name = '佐助';
$stu2->stu_age = 20;
$stu2->stu_money = 50000;
$stu2->introduce($stu2);