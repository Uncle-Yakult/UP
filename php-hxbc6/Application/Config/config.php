<?php
//config.php配置文件前面注意有return
return array(
    //数据库的配置信息
    'database'  =>array(
        'host'  =>  '127.0.0.1',
        'port'  =>  '3306',
        'user'  =>  'root',
        'pwd'   =>  'root',
        'charset'=> 'utf8',
        'dbname'=>  'php4'
    ),
    //应用程序的配置信息
    'app'       =>array(
        'default_platform'      =>  'Admin',
        'default_controller'    =>  'Product',
        'default_action'        =>  'list',
    )
);
?>