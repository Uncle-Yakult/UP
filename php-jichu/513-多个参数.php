<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
    header('content-type:text/html;charset=utf-8');
    function fun($name,$sex='男',$age='未知',$add='地址不详'){
        echo "你好：{$name}<br>";
        echo "性别：{$sex}<br>";
        echo "年龄：{$age}<br>";
        echo "地址：{$add}<hr>";
    }
    fun('李白');
    fun('杜甫','女');
    fun('白居易','男','22');
    fun('李清照','女','23','北京');
    ?>
    </body>
</html>
