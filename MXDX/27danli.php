<?php

/**
 * 单例模式
 */
class Student {
    private function __construct()
    {
    }
    /**
     * 静态的公开方法，得到当前类的对象
     */
    public static function getInstance() {
        // 判断当前对象是否已经存在
        if (!self::$instance instanceof self) {
            self::$instance = new self;
        }
        return self::$instance;
    }
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
}
$stu1 = Student::getInstance();
$stu2 = Student::getInstance();
$stu3 = clone $stu1;
echo '<pre>';
var_dump($stu1,$stu2,$stu3);