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
    //定义一个函数，求最大值
    function myMax($array=''){
        if (empty($array) || !is_array($array)){
            return '请输入一个数组';
        }$max=$array[0];//假设第0个是最大值
        for ($i=1,$n=count($array);$i<$n;$i++){
            if ($array[$i]>$max)//如果有比$max大的值，就将此值付给$max，这样保证$max中永远是最大值
                $max=$array[$i];
        }
        return $max;
    }
    //测试
    $array=array(10,20,30,50,24,18);
    echo myMax($array);
    ?>
    </div>
    </body>
</html>
