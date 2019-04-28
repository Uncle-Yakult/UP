<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
//方法一：
$path = 'aa.bb.cc.jpg';
echo strrchr($path,'.'),'<hr>';

//方法二：
$path = 'f:/壁纸/01c6ec5c3201fda80121df904a4848.jpg@2o.jpg';
$info = pathinfo($path);    //获取文件信息
echo '<pre>';
var_dump($info);
echo '<hr>';
echo $info['extension'];
?>
</body>
</html>