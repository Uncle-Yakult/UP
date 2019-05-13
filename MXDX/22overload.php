<?php

header("Content-type:text/html;Charset=UTF-8");
class Student {
    public $stu_name;
    public $stu_age;
    public $stu_id;
    /**
     * __set()方法
     * @param string$name 不可访问的属性的名字
     * @param mixed $value 给不可访问的属性赋的值
     */
    public function __set($name, $value)
    {
        // $this->$name = $value;
        echo '对不起，你操作的属性不可访问！<br />';
    }
    /**
     * __get()
     * @param string $name 不可访问的属性的名字
     */
    public function __get($name)
    {
        return '唐伯虎';
    }
}
$stu = new Student();
$stu->stu_name = '华安';
$stu->stu_age = 30;
// 为不可访问的属性赋值
$stu->stu_id = 9527;
// 访问一个不可访问的属性
var_dump($stu->$stu_id);
echo '<pre>';
var_dump($stu);