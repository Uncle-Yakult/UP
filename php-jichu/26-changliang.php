<?php
header('content-type:text/html;charseet=utf-8');
define('name','李白');//true表示不区分大小写
echo NAME,'<br>';   //李白
//echo name,'<br>';   //李白

echo '<hr>';
//通过特殊字符声明变量
define('^-^','我很开心');
echo constant('^-^');

echo '<hr>';
//判断常量是否定义
if (!defined('NAME')) {
     define('NAME', '杜甫');
}

//预定义常量
echo PHP_VERSION,'<br>';    //5.3.29（PHP版本）
echo PHP_OS,'<br>';     //WINNT（PHP运行的操作系统）

echo '<hr>';
//魔术常量
echo __LINE__,'<br>';   //当前行数
echo __FILE__,'<hr>';   //当前文件

//const常量
const NATION='中国';
echo NATION,'<hr>';

//获取所有常量
echo '<pre>';
var_dump(get_defined_constants(true));