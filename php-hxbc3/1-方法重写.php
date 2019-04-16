<?php
header('content-type:text/html;charset=utf-8');
class Person {
    public function show() {
        echo '这是人类<br>';
    }
}
class Student extends Person {
    public function show() {
        echo '这是学生类';       //方法重写
    }
}
$stu = new Student;
$stu ->show();
?>