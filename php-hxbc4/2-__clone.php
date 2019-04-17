<?php
header('content-type:text/html;charset=utf-8');
class Student {
    private $is_clone = false;
    public function __clone()
    {
        $this->is_clone = true;
    }
}
$stu1 = new Student;
var_dump($stu1);echo '<br>';
$stu2 = clone $stu1;
var_dump($stu2);echo '<br>';
?>