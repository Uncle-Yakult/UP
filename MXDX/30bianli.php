<?php

header("Content-type:text/html;Charset=UTF-8");
$arr = array(
    'name'  => '鸣人',
    'age'   => 22,
    'skill' => '色诱术',
    'wife'  => '雏田'
);
echo "<pre>";
var_dump($arr);
// 数组的遍历
class Student {
    public $name;
    public $age;
    public $skill;
    public $wife;
}
$stu = new Student;
$stu->name  = '鸣人';
$stu->age   = 22;
$stu->skill = '色诱术';
$stu->wife  = '雏田';
echo '<hr />';
// var_dump($stu);
// 对象的遍历
foreach ($stu as $p_name=>$p_value) {
    echo $p_name,'=>',$p_value;
    echo "<br />";
}