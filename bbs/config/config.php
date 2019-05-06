<?php

/**
 * 项目的配置文件
 */

return array(
	// 数据库配置信息
	'db'=> array(
		'host'	=>'localhost',
		'port'	=>'3306',
		'user'	=>'root',
		'pass'	=>'root',
		'charset'=>'utf8',
		'dbname'=>'bbs'
	),
	// 验证码配置信息
	// 分页配置信息
    'page' => array(
        'rowPerPage' => 5,  //每页显示的记录数
        'maxnum' => 6   //页面上能显示的最多有多少个页面
    )
);