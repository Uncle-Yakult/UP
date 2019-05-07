<?php

abstract class Animal {
    public $name;
    public function showName() {
        echo $this->name;
    }
    abstract public function move();
    abstract public function eat();
    abstract public function sleep();
}

class Human extends Animal {
    // 实现父类中所有的抽象方法
    public function move() {
        echo 'I can walk,run,swim!<br />';
    }
    public function eat() {}
    public function sleep() {}
}

class Bird extends Animal {
    // 实现父类中所有的抽象方法
    public function move() {
        echo 'I can fly,jump!<br />';
    }
    public function eat() {}
    public function sleep() {}
}

class Snake extends Animal {
    // 实现父类中所有的抽象方法
    public function move() {
        echo 'I can pa!<br />';
    }
    public function eat() {}
    public function sleep() {}
}