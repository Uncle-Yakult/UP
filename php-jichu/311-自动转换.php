<?php
header('content-type:text/html;charset=utf-8');
$num=10;
if ($num){  //将数字型自动转换成布尔型
    echo 'i am a boy';
}
echo '<hr>';

echo '10aa'+'20bb';     //30（因为+做数字运算，将字符串转成数字）

echo '<hr>';

$num1='abc';
$num2=0;
if ($num1==$num2){
    echo '这两个数相等';      //这两个数相等
}
?>