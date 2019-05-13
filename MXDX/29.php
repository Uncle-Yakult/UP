<?php

/**
 * 利用工厂得到单例对象
 */
class Factory {
    public static function getOBJ($class_name) {
        static $obj_list = array(); // 保存已经实例化好了的对象
        // 类名字就是元素的下标，对象本身就是元素的值
        if (!isset($obj_list[$class_name])) {
            if (file_exists('./' . $class_name . '.class.php')) {
                include_once './' . $class_name . './class.php';
            }
            $obj_list[$class_name] = new $class_name;
        }
        return $obj_list[$class_name];
    }
}

$stu1 = Factory::getOBJ('Student');
$stu2 = Factory::getOBJ('Student');
echo '<pre>';
var_dump($stu1,$stu2);

$tea1 = Factory::getOBJ('Teacher');
$tea2 = Factory::getOBJ('Teacher');
var_dump($tea1,$tea2);