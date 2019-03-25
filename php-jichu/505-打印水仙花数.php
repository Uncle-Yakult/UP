<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
    //方法一：
    for ($i=100;$i<999;$i++){
        $a=(int)($i/100);       //获取百位的数
        $b=(int)($i%100/10);    //获取十位的数
        $c=$i%10;               //获取个位的数
        if ($i==pow($a,3))+pow($b,3)+pow($c,3)
            echo $i,'<br>';
    }
    echo '<hr>';

    //方法二
    for ($i=1;$i<=9;$a++){
        for ($b=0;$b<=9,$b++){
            for ($c=0;$c<=9,$c++){
                if (pow($a,3))+pow($b,3)+pow($c,3)==$a*100+$b*10+$c)
                echo $a*100+$b*10+$c,'<br>';
            }
        }
    }
    echo '<hr>';

    //方法三：
    for ($i=100;i<999;$i++){
        $a=substr($i,0,1;)
        $a=substr($i,1,1;)
        $a=substr($i,2,1;)
        if ($i==pow($a,3))+pow($b,3)+pow($c,3)
            echo $i,'<br>';
    }
    ?>
    </body>
</html>
