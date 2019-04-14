<?php
header('content-type:text/html;charset=utf-8');
$str='abcdef';
echo substr($str,1,3),'<br>';   //bcd
//起始位置是负数，表示从结尾向前数
echo substr($str,-3,2),'<br>';  //de
echo substr($str,-1,2),'<br>';  //f
//长度如果省略姐截取到结尾
echo substr($str,2),'<br>';             //cdef
echo substr($str,-4),'<br>';            //cdef
//长度为负表示后面几个负不截取
echo substr($str,2,-1),'<br>';  //cde
echo substr($str,-4,-2),'<br>'; //cd
?>