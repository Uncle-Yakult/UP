<?php
header('content-type:text/html;charset=utf-8');
//类
class Student {
    //方法
    public function show(){
        echo '德玛西亚';
    }
}
//实例化
$stu1=new Student;   //()可以省略
$stu2->show();

$stu2=new Student;
$stu2->show();
?>