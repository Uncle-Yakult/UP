<?php
<header('content-type:text/html;charset=utf-8');
$stu[true]='李白';    //转成1
$stu[false]='杜甫';   //转成0
$stu[12.9]='白居易';   //去整数部分
$stu[-12]='辛弃疾';    //负整数可以做下标
$stu[-12.8]='王安石';  //取整数部分
$stu['10']='李清照';   //将字符串数字转成整型做下标
$stu['']='苏东坡';     //空字符串也可以做下标
$stu[null]='小苏东坡'; //null转成字符串空做下标
echo '<pre>';
var_dump($stu);