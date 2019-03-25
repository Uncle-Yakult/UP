<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
    header('content-type:text/html;charset=utf-8');
    function fun($num){
        if ($num=1)
            return 1;       //递归出口
        return $num+fun($num-1);    //递归点
    }
    echo fun(100);
    /*
     * 分析
     * fun(100)=100+fun(99);
     *         =100+99+fun(98);
     *         =100+99+98+fun(97);
     *         =100+99+98+97++fun(1);
     *         =100+99+98+97+1;
     */
    ?>
    </body>
</html>
