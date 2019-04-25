<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>无标题文档</title>
</head>

<body>
<?php
//连接数据库
$link = mysqli_connect('localhost','root','root','php4');
//获取数据
$sql = 'select * from category order by sort_order';
$rs = mysqli_query($link,$sql);
//将资源转成二维码
$array = array();
while ($rows = mysqli_fetch_assoc($rs)) {
    $array[] = $rows;
}
//创建树型结构
function createTree($list,$parentid=0,$deep=0) {
    static $tree = array();
    foreach ($list as $rows) {
        if ($rows['parentid']==$parentid) {
            $rows['deep']=$deep;
            $tree[]=$rows;
            createTree($list,$rows['id'],$deep+1);
        }
    }
    return$tree;
}
//测试
echo '<pre>';
$temp = createTree($array);
foreach ($temp as $rows) {
    echo str_repeat('&nbsp;',$rows['deep']*3),$rows['name'],'<br>';
}
?>
</body>
</html>