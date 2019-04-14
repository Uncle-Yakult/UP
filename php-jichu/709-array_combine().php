<?php
header('content-type:text/html;charset=utf-8');
$keys=array('name','sex','age');
$values=array('李白','男',20);
$array=array_combine($keys,$values);//第一个数组做键，第二个数组做值
print_r($array);
?>
