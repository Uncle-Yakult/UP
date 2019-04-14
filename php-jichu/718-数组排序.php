<?php
header('content-type:text/html;charset=utf-8');
$list=array('a'=>10,'c'=>8,'b'=>12);
//sort($list);          //按值进行升序排列，不保持原来的键值关联
//rsort($list);         //按值进行降序排列，不保持原来的键值关联
//asort($list);         //按值进行升序排列，保持原来的键值关联
//arsort($list);        //按值进行降序排列，保持原来的键值关联
//ksort($list);         //按键进行升序排列
//krsort($list);        //按键进行降序排列
//print_r($list);

//自然排序
/*$stu=array('stu_3','stu_1','stu_5','stu_18','stu_101');
sort($stu);//按值排序
print_r($stu);
echo '<br>';
natsort($stu);//自然排序
print_r($stu);*/

//用户自定义排序
$stu=array(
    array('name'=>'寒冰','age'=>22,'score'=>77),
    array('name'=>'维鲁斯','age'=>32,'score'=>88),
    array('name'=>'奥巴马','age'=>25,'score'=>79),
    array('name'=>'薇恩','age'=>20,'score'=>75),
);
sort($stu);//默认按数组的第一个值开始排序
usort($stu,function ($stu1,$stu2){
   if ($stu1['age']<$stu2['age'])
       return -1;
   elseif($stu1['age']>$stu2['age'])
       return 1;
   else
       return 0;
});
echo '<pre>';
print_r($stu);
?>