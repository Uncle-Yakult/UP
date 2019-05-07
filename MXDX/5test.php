<?php

header("Content-type:text/html;Charset=utf-8");
// 定义学生类
class Student {
    public $stu_name;
    public $stu_age;
    public $stu_money;
    /**
     * 缴费的能力
     */
    public function payMoney() {
        $this->stu_money -= 18000;
        echo '学生缴费成功！<br />';
    }
    /**
     * 构造方法
     */
    public function __construct($name,$age,$money) {
        $this->Student($name, $age, $money);
    }
    public function Student($name,$age,$money) {
        $this->stu_name = $name;
        $this->stu_age = $age;
        $this->stu_money = $money;
    }
}

// 实例化一个学生对象
$stu1 = new Student('鸣人', 21, 30000);

// 再实例化一个学生对象
$stu2 = new Student('路飞', 23, 50000);
echo '<pre>';
var_dump($stu1,$stu2);