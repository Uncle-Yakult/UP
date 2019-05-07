<?php

header("Content-type:text/html;Charset=UTF-8");
/**
 * 定义一个连接MySQL数据库的类
 */
class MySQLDB {
    public $link;
    public function __construct(){
        $this->link = mysqli_connect("localhost:3306",'root','root','php4');
    }
}
// 实例化一个MySQLDB类的对象
$db = new MySQLDB;
/*echo '<pre>';
var_dump($db);*/

// 删除$db对象
unset($db);

$sql = "show database";
$result = mysqli_query($sql);
var_dump($result);