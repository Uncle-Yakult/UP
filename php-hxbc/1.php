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

$name = [
    '苹果',
    '香蕉',
    '桃子',
    '被子',
    'BBB',
    '手耳机',
    '随便',
    'IPHONE',
];
$lei = [
    '汁',
    '干',
    '排',
    '汤',
];

for ($x=1; $x<=100; $x++) {
    $nameStr = $name[rand(0,7)] . $lei[rand(0,3)];
    $pingStr = rand(1,10) * 4;
    $fStr = rand(1,10) * 4000;
    $gStr = rand(1,10) * 2;
    $res = mysql_query("insert into products values ($x,'{$nameStr}','每箱{$pingStr}瓶',{$fStr},{$gStr},'images/1.bmp','http://www.sina.com')");
}
?>