<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
    $num1=1;
    $num2=1;
    echo $num1,'&nbsp',$num2,'&nbsp';
    for (;;){
        $num3=$num1+$num2;
        if ($num3>100){
            break;
        }
        echo $num3,'&nbsp';
        $num1=$num2;
        $num2=$num3;
    }
    ?>
    </body>
</html>
