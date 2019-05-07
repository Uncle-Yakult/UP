<?php

class A {
    // 父类中访问子类属性p
    public function af() {
        var_dump($this->p);
        echo '<br />';
    }
}

class B extends A {
    public $p = "Public_property";
    // 当前类内访问属性p
    public function bf() {
        var_dump($this->p);
        echo '<br />';
    }
}

class C extends B {
    // 子类访问父类属性P
    public function cf() {
        var_dump($this->p);
        echo '<br />';
    }
}

$obj = new C;
$obj->af(); // 父类中访问子类属性p
$obj->bf(); // 当前类内访问属性p
$obj->cf(); // 子类访问父类属性p
var_dump($obj->p);  // 类外访问属性p