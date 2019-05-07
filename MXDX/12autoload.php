<?php

header("Content-type:text/html;Charset=UTF-8");

$stu = new Student;

function __autoload($class_name) {
    include './' . $class_name . './class.php';
}

var_dump($stu);