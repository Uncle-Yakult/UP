<?php
header('content-type:text/html;charset=utf-8');
$array=range('a','z');
//$index=array_rand($array,1);
//print_r($index);echo '<br>';    //16
$index=array_rand($array,2);
print_r($index);echo '<br>';    //Array([0]=>12 [1]=>19)
shuffle($index);    //打乱数组
print_r($index);echo '<br>';
?>
