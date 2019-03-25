<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
    header('content-type:text/html;charset=utf-8');
    function fun(){
        $n=func_num_args();
        $array=func_get_args();
        $sum=0;
        for ($i=0;i<$n;$i++){
            echo $sum+=$array[$i];
        }echo '参数的和是：'.$sum.'<hr>';
    }
    fun(10);
    fun(10,20,30);
    ?>
    </body>
</html>
