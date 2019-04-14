<?php
header('content-type:text/html;charset=utf-8');
$str='abcda';
echo strchr($str,'b'),'<br>';   //bcba
echo strrchr($str,'b'),'<br>';  //ba

//截取后缀
$path='aa.bb.cc.jpg';
echo strrchr($path,'.');

//替换字符串
$str='明日复明日，明日何其多';
echo str_replace('明日','tomorrow',$str),'<br>';//将明日替换成tomorrow
//一次替换多个字符串
echo str_replace(array('明日','复','何其'),array('tomorrow','又','非常'),$str),'<br>';

$str='亚索是我孙子，剑圣也是我的孙子';
echo str_replace(array('亚索','剑圣'),'你',$str),'<br>';
echo str_replace(array('我','你'),array('你','他'),$str);//后面的替换在前面的基础上进行
echo '<hr>';

//将字符串分割成数组
$str='abcdef';
print_r(str_split($str));
echo '<br>';
print_r(str_split($str,2));

//填充字符串
$stuid=12;
echo str_pad($stuid,4,'0'),'<br>';
echo str_pad($stuid,4,'0',STR_PAD_LEFT),'<br>';
echo str_pad($stuid,4,'0',STR_PAD_BOTH),'<hr>';

//字符串大小写转换
echo strtolower('I AM A BOY!'),'<br>';
echo strtoupper('i am a boy!'),'<hr>';
?>