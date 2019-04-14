<?php
header('content-type:text/html;charset=utf-8');
$array1=array(10=>'a','b','c','d');
$array3=array(10,20,40);
$array=array_diff($array1,$array2,$array3);     //差集
print_r($array);        //Array ( [1] => b [3] => d [6] =>30 )

echo '<hr>';
$array1=array_intersect($array2,$array1);       //交集
print_r($array);   //Array ( [10] => a [11] => c )
?>
