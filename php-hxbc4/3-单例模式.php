<?php
header('content-type:text/html;charset=utf-8');
/*class Student {}
$stu = new Student;
var_dump($stu instanceof Student);
exit;*/

/*
 * 单例模式：一个类只能有一个对象
 * 三私一公
 */
class MySQLDB {
    private static $instance;
    private function __construct()
    {       //私有的构造函数阻止类的外部实例化
    }
    private function __clone()
    {       //私有的__clone()阻止clone对象
    }
    public static function getInstance()
    {
        if (!self::$instance instanceof self)
            self::$instance = new self;
        return self::$instance;
    }
}
$db1 = MySQLDB::getInstance();
$db2 = MySQLDB::getInstance();
var_dump($db1,$db2);
?>