<?php
header('content-type:text/html;charset=utf-8');
class Student {
    private $name='tom';
    public static function show(){
        $stu = new self;
        echo $stu->name;
    }
}
Student::show();
?>
