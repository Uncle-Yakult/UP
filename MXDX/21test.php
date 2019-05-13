<?php

header("Content-type:text/html;Charset=UTF-8");
class Student {
    public $stu_name;
    public $stu_age;
}
$stu = new Student();
$stu->stu_name = '华安';
$stu->stu_age = 30;
echo '<pre>';
var_dump($stu);
$stu->stu_id = 9527;
echo '<hr />';
var_dump($stu);