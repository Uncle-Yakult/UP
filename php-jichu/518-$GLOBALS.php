<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
    header('content-type:text/html;charset=utf-8');
    $num=10;
    function fun(){
        $num2=20;
        echo $GLOBALS['num']+$num2;   //获取全局变量的num值
    }
    fun();
    ?>
    </body>
</html>
