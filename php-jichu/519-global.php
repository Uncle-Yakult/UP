<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
    header('content-type:text/html;charset=utf-8');
    $num1=10;
    function fun(){
        $num2=200;
        global $num1;   //  保存全局$num地址，等价于$num1=&$GLOBALS['num1'];
        echo $num1+$num2,'<br>';
        unset($num1);   //  销毁的是全局$num1的地址，不是具体的值
    }
    fun();      //300
    echo $num1;     //100
    ?>
    </body>
</html>
