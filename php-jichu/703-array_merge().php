<?php
//生成字母、数字、下划线的数组
$array=array_merge(range('a','z'),range('A','Z'),range(0,9),$array('_'));
print_r($array);
?>
