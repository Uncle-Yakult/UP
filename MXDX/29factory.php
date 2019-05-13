<?php

/**
 * 工厂类，帮助其他类生产对象
 */
class Factory {
    public static function getOBJ($class_name) {
        if (file_exists('./' . $class_name . '.class.php')) {
            include_once './' . $class_name . '.class.php';
        }
        return new $class_name; // 可变类
    }
}

$stu1 = Factory::getOBJ('Student');
$stu2 = Factory::getOBJ('Student');
echo '<pre>';
var_dump($stu1,$stu2);