<?php

// 第一次使用成熟smarty

include "./libs/Smarty.class.php";

$smarty = new Smarty;

// 给smarty做简单的配置
$smarty -> left_delimiter   =   "<@@@";
$smarty -> right_delimiter  =   "@@@>";
$smarty -> setTemplateDir("./View/");
$smarty -> setCompileDir("./View_c/");

// 本质：把addr、name设置为smarty对象属性的一部分
// 表面：把addr、name传递给模板以便使用
$smarty -> assign('addr','建材城西路');
$smarty -> assign('name','腾讯大厦');

$smarty -> display('01.html');