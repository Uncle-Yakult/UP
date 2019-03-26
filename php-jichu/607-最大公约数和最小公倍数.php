<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html" charset="UTF-8">
        <title></title>
        <style type="text/css">
        </style>
    </head>
    <body>
    <div>
    <?php
    function fun($num1,$num2){
        if ($num2==0)
            return $num1;
        return fun($num2,$num1%$num2);
    }
    $num=fun(8251,6105),'<br>';    //最大公约数
    echo $num;
    echo 8251*6105/$num;    //最小公倍数
    ?>
    </div>
    </body>
</html>
