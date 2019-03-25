<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
    header('content-type:text/html;charset=utf-8');
    function fun($num1,$num2){
        var_dump($num1,$num2);
        echo '<hr>';
    }
    fun(10);        //实参少于形参，报一个错误，继续执行
    fun(10,20,30);      //实参多于形参（正常执行，取前面对应的值）
    ?>
    </body>
</html>
