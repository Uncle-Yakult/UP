<?php

class Common {
    public function autoload($class_name) {
        if (file_exists('./' . $class_name . './class.php')) {
            include './' . $class_name . '.class.php';
        }else {
            echo '没有找到相关的类文件！<br />';
            return false;
        }
    }
    public static function register() {
        spl_autoload_register('self::autoload')
    }
}

$obj = new Common;
// 注册Common 类下的autoload方法为自动加载方法
// spl_autoload_register(array($obj,'autoload'));

Common::register();
$stu = new Student;
var_dump($stu);