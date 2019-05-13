<?php

header("Content-type:text/html;Charset=UTF-8");
class Student {
    private $stu_id;
    private $stu_name;
    private $stu_age;
    private $stu_money = 50000;
    private static $stu_nums = 0;
    // 使用属性重载来完成对私有属性的操作
    /**
     * __set()
     */
    public function __set($name, $value)
    {
        $allow_write = array('stu_id','stu_name','stu_age');
        if (in_array($name,$allow_write)) {
            if ($name == 'stu_age') {
                if (is_integer($value) && $value >= 0 && $value <= 150){
                    $this->$name = $value;
                }else {
                    echo '非法的年龄信息！<br />';
                    return false;
                }
            }else {
                $this->$name = $value;
            }
        }else {
            echo "当前的{$name}属性不允许被赋值！<br />";
            return false;
        }
    }
    /**
     * __get()
     */
    public function __get($name)
    {
        $allow_read = array('stu_id','stu_name');
        if (in_array($name,$allow_read)) {
            return $this->$name;
        }else {
            echo "当前的{$name}属性不允许被查看！<br />";
            return false;
        }
    }
}
$stu = new Student();
$stu->stu_id = 9527;
$stu->stu_name = '华安';
$stu->stu_age = 30;
$stu->stu_money = 100000;
echo '<pre>';
var_dump($stu->stu_age);