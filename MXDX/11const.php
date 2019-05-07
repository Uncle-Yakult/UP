<?php

class Student {
    public $stu_name;   // 非静态属性
    public static $stu_num = 0;     // 静态属性
    // 定义一个类常量
    const SCHOOL = "itcast";
    // 非静态方法
    public function showName() {
        echo $this->stu_name;
    }
    // 静态方法
    public static function showSchool() {
        echo self::SCHOOL;
    }
}

// 类外访问类常量
echo Student::SCHOOL;
echo '<pre>';
// 实例化一个对象
$stu = new Student;
var_dump($stu);