<?php

/**
 * 定义一个接口
 */
interface I_animal {
    // 接口常量
    const PI = 3.14;
    // 抽象方法
    public function move();
    public function eat();
    public function sleep();
}

interface I_shengwu {
    // 抽象方法
    public function eat();
}
class Human implements I_animal,I_shengwu {
    public $name;
    public function move() {}
    public function sleep() {}
    public function eat() {}
}
/*
abstract class Human implements I_animal {
    private $name;
    public function move() {}
    public function eat() {}
}

class Student {}

var_dump(class_exists('Student'));
var_dump(class_exists('I_animal'));
var_dump(interface_exists('I_animal'));*/