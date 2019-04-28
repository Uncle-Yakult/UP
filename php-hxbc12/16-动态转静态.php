<?php
header('content-type:txt/html;charset=utf-8');
$url = "http://dev.up.cn/index.php";
$str = file_get_contents($url);
file_put_contents('./index.html',$str);
echo 'success';