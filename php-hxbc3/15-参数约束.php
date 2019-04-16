<?php
header('content-type:text/html;charset=utf-8');
//类是一个数据类型
class Student {

}
//调用函数只能传入Student类型的对象
function show(Student $obj){
    var_dump($obj);
}
show(new Student());    //object(Student)#1 (0) {}
?>
