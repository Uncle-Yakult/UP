<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
    header('content-type:text/html;charset=utf-8');
    //返回函数的引用
    function &fun(){
        $num=10;
        return $num;    //如果直接返回值会报错，只有变量才可以返回引用
    }
    $result=&fun();     //保存返回值的地址
    echo $result;
    ?>
    </body>
</html>
