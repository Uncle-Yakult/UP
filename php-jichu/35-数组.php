<?php
header('content-type:text/html;charset=utf-8');
//索引数组
$stu=array('tom','berry','ketty');
echo $stu[0],'<br>';    //tom
echo $stu[1],'<br>';    //berry
echo $stu[2],'<br>';    //ketty
echo '<hr>';

//关联数组，键值对
$emp=array('name'=>'李白','sex'=>'男','age'=>20);
echo $emp['name'],'<br>';    //李白
echo $emp['sex'],'<br>';    //男
echo $emp['age'],'<hr>';    //20

//数组的声明一
$worker1=array('李白','杜甫','白居易');
print_r($worker1);
echo '<br>';
//数组的声明二
$worker2[]='tom';
$woeker3[]='berry';
print_r($worker2);