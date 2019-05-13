<?php
// 链接数据库、获得具体数据
$title = "国家开会";
$content = "北京机动车限行";

// ①引入迷你Smarty
require "MiniSmarty.class.php";
// ②实例化改Smarty
$smarty = new MiniSmarty;

// 吧字符串信息设置为模板引擎类的属性信息
$smarty -> assign('title','国家开会');
$smarty -> assign('content','北京机动车限行');

// ③调用compile方法，同事传递02.html模板文件参数
// 在该方法里把02.html内部标记替换为php标记
$smarty -> compile('02.html');

// require "02.html";