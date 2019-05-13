<?php

header("Conten_type:text/html; Charset=UTF-8");

$smarty = new Smarty;
$smarty -> setTemplateDir("./View/");
$smarty -> setComplieDir("./View_c/");

// 索引
$smarty -> assign('fruit',array('banana','apple','orange','pear'));
// 关联
$smarty -> assign('animal',array('huashan'=>'monkey','deguo'=>'dog','northeast'=>'tiger','helan'=>'pig','cat','panda','chichen'));

$smarty -> display('06.html');