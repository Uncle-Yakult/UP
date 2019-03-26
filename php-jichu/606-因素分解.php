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
    $i=2;   //因数从2开始
    function fun($num){
        global $i;
        if ($num%$i==0){
            echo $i;
            $num=$num/$i;
            fun($num);//递归点
        }else{
            if ($num=1)
                return;//递归出口
            $i++;
            fun($num);//递归点
        }
    }
    //测试
    fun(8);
    echo '<br>';
    fun(24);
    ?>
    </div>
    </body>
</html>
