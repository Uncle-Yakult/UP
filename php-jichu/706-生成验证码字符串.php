<?php
header('content-type:text/html;charset=utf-8');
$array=array_merge(range('a','z'),range('A','Z'),range(0,9));
$index=array_rand($array,4);    //随机取出4个元素
shuffle($index);    //打乱数组
$str='';
foreach ($index as $i){
    $str.=$array[$i];
}
echo $str;
?>
