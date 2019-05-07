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

    /**
     * __clone方法，在克隆对象的时候对新对象的初始化工作
     */
    public function __clone() {
        $this->is_clone = true;
        $this->stu_money /= 2;
    }
}

// 实例化一个学生对象
$stu1 = new Student('鸣人',21,30000);

// 对象的克隆
$stu2 = clone $stu1;

echo '<pre>';
var_dump($stu1,$stu2);

var_dump($stu1 instanceof Student);
var_dump($stu2 instanceof Student);