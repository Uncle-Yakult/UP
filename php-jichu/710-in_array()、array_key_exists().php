<?php
header('content-type:text/html;charset=utf-8');
$array=array('name'=>'李白','杜甫','白居易','tom',123);
var_dump(in_array('李白',$array));        //查找数组的值
echo '<hr>';
var_dump(in_array('TOM',$array));          //区分大小写
echo '<hr>';
var_dump(in_array('123',$array));          //不区分数据类型
echo '<hr>';
var_dump(array_key_exists('name',$array));
echo '<hr>';
var_dump(array_key_exists(0,$array));
echo '<hr>';
var_dump(array_key_exists(4,$array));

?>
