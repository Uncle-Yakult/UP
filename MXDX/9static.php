<?php

header("Content-type:text/html;Charset=UTF-8");
// 定义学生类
class Student {
    public $stu_name;
    public $stu_age;
    public $stu_money;
    public static $class_id = 312;   // 班级号
    public static $stu_num = 0;     // 班级人数
    public static $stu_tea = "Miss Zhou";   // 班主任

    /**
     * 构造方法
     */
    public function __construct($name,$age,$money) {
        $this->stu_name = $name;
        $this->stu_age = $age;
        $this->stu_money = $money;
        // 班级人数加1
        self::$stu_num ++;
    }

    /**
     * 析构方法
     */
    public function __destruct() {
        // 班级人数减1
        self::$stu_num --;
    }

    /**
     * __clone方法
     */
    public function __clone() {
        // 班级人数加1
        self::$stu_num ++;
    }
}

// 实例化一个学生对象
$stu1 = new Student('鸣人',21,30000);

// 再实例化一个学生对象
$stu2 = new Student('佐助',23,50000);

// 再克隆一个对象
$stu3 = clone $stu1;

// 删除一个对象
$stu2 = NULL;

// 输出学生总人数
echo Student::$stu_num;