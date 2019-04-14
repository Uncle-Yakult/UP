<?php
header('content-type:text/html;charset=utf-8');
$str='abcde';
echo $str[1],'<br>';        //b
$str[3]='A';
echo $str;                  //abcAe

echo '<hr>';
//strlen()
echo strlen('ab'),'<br>';
echo strlen('德玛'),'<hr>';

//trim()、Itrim()、rtrim()
$str='  ab   ';
echo strlen($str),'<br>';
echo strlen(trim($str)),'<br>';
echo strlen(ltrim($str)),'<br>';
echo strlen(rtrim($str)),'<br>';

//strpos()、strrpos()
$str='abcda';
echo strpos($str,'a'),'<br>';
echo strrpos($str,'a'),'<br>';

//str_repeat()
$word='hello!';
echo str_repeat($word,3),'<br>';//重复字符串

//chr()、ord()
$num=ord('A');//获取字符的ASC||码
echo $num,'<br>';
echo chr($num);//将ASC||转成字符
?>