 <?php
    $config=require $_SERVER['DOCUMENT_ROOT'].'/config/config.php';
    //连接数据库
    mysql_connect($config['host'].':'.$config['port'],$config['name'],$config['pwd']) or die ('数据库连接失败');
    //选择方法一：
    //mysql_query("use `{$config['data']}`") or die ('数据库不存在');
    //选择方法二：
    mysql_select_db($config['database']);
    //设置执行环境
    mysql_query("set names {$config['charset']}");
?>