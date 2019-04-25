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
$rs = mysqli_query($link,'select * from category order by sort_order');
//将资源转成二维数组
$array = array();
while ($rows = mysqli_fetch_assoc($rs)) {
    $array[] = $rows;
}
//循环二维数组
echo '<ul>';
foreach ($array as $rows1) {
    if ($rows1['parentid']==0) {
        echo "<li>{$rows1['name']}</li>";
        echo '<ul>';
        foreach ($array as $rows2) {
            if($rows2['parentid']==$rows1['id']){
                echo "<li>{$rows2['name']}</li>";
            }
        }
        echo '</ul>';
    }
}
echo '</ul>';
?>
</body>
</html>