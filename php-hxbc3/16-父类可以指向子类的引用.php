<?php
header('content-type:text/html;charset=utf-8');
abstract class Person{}
class Student extends Person {}
class Employee extends Person {}
function show{Person $obj}{     //父类可以指向子类的引用
    var_dump($obj);
    echo '<br>';
}
show(new Student);
show(new Employee);
show(10);       //报错
?>
