<?php

header("Content-type:text/html;Charset=UTF-8");
// 定义学生类
class Student {
    public $stu_name;
    public $stu_age;
    public $stu_money;
    /**
     * 构造方法
     */
    public function __construct($name,$age,$money) {
        $this->stu_name = $name;
        $this->stu_age = $age;
        $this->stu_money = $money;
    }
}

// 实例化一个学生对象
$stu1 = new Student('鸣人',21,30000);
$stu2 = $stu1;  // 变量间的值传递
echo '<pre>';
// 修改$stu2的属性值
$stu2->stu_name = '佐助';
var_dump($stu1,$stu2);