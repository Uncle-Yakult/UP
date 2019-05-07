<?php

header("Content-type:text/html;Charset=UTF8");
class Student {
    private $stu_age;
    private $stu_name;

    /**
     * 操作stu_age属性的公开方法
     */
    public function set_age($age) {
        if (is_integer($age) && $age >=0 && $age<=150) {
            $this->stu_age = $age;
        }else{
            echo '非法的年龄信息！<br />';
            return false;
        }
    }
    public function get_age() {
        return $this->stu_age;
    }
}

$stu = new Student;
// $stu->stu_age = -23.5;
// 只能通过相关的公开方法来设置$stu_age属性
$stu->set_age(30);
echo $stu->get_age();
echo '<pre>';
var_dump($stu);