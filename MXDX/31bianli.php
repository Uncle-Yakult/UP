<?php

header("Content-type:text/html;Charset=UTF-8");
/**
 * 对象的自定义遍历
 */
class Student {
    public $name;
    public $age;
    public $skill;
    public $wife;
    public $partner;
}
$stu = new Student;
$stu->name  = '鸣人';
$stu->age   = 22;
$stu->skill = '色诱术';
$stu->wife  = '雏田';
$stu->partner = array(
    'name'  => '佐助',
    'age'   => 23,
    'skill' => '千鸟',
    'wife'  => '小樱',
    'home'  => '晓',
);
foreach ($stu as $p_name=>$p_value) {
    echo $p_name,'=>',$p_value;
    echo "<br />";
}