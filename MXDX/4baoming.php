<?php

/**
 * 使用OOP完成报名过程
 */
header("Content-type:text/html;Charset=utf-8");
/**
 * 定义相关的类
 */
//定义学生类
class Student {
    public $stu_name;
    public $stu_age;
    public $stu_money;
    /**
     * 缴费的能力
     */
    public function payMoney() {
        $this->stu_money -= 18000;
        echo '缴费成功！ <br />';
    }
}

//定义教师类
class Teacher {
    public $tea_name;
    public $tea_money;
    public $stu_infos;
    /**
     * 登记学生信息的能力
     */
    public function setInfos($stu) {    // $stu代表一个学生对象
        $this->stu_infos[] = $stu;
        echo '登记成功！ <br />';
    }
    /**
     * 获取工资的能力
     */
    public function getWages() {
        $this->tea_money += 20000;
        echo '已经领到工资！<br />';
    }
}

// 定义机构类
class School {
    public $sch_name;
    public $sch_money;
    /**
     * 收学费的能力
     */
    public function getMoney(){
        $this->sch_money += 18000;
        echo '收取学费成功！<br />';
    }
    /**
     * 给教室发工资的能力
     */
    public function payWages() {
        $this->sch_money -= 20000;
        echo '工资已发，请注意查收！<br />';
    }
}

//定义班级类
class Classroom {
    public $class_name;
    public $stu_names;  // 用于保存学生的花名册
    /**
     * 增加学生的能力
     */
    public function getNames($stu) {    // $stu也是一个学生的对象
        $this->stu_names[] = $stu->stu_name;
        echo '你已经成功入班！<br />';
    }
}

/**
 * 实例化对象并初始化
 */
// 实例化一个学生对象
$stu = new Student;
$stu1->stu_name = '鸣人';
$stu1->stu_age = 21;
$stu1->stu_money = 30000;

// 实例化一个教师对象
$tea = new Teacher;
$tea->tea_name = '卡卡西';
$tea->tea_money = 100000;
$tea->stu_infos = array();

// 实例化一个机构对象
$sch = new School;
$sch->sch_name = '艾欧尼亚';
$sch->sch_money = 2000000;

// 实例化一个班级对象
$class = new Classroom;
$class->class_name = 'php23';
$class->stu_names = array();

/**
 * 让对象执行相应的功能
 */
// 教师登记学生信息
$tea->setInfos($stu);
// var_dump($tea->stu_infos);

// 学生缴费
$stu->payMoney();
// var_dump($stu->stu_money);

// 机构收费
$stu->getMoney();

// 班级增加学生信息
$class->getNames($stu);
// var_dump($class->stu_names);

// 学校发工资
$sch->payWages();

// 教师收取工资
$tea->getWages();