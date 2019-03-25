<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
    header('content-type:text/html;charset=utf-8');
    function myMax($num1,$num2){
        if ($num1>$num2)
            return $num1;
        return $num2;
    }
    echo myMax(10,200)
    ?>
    </body>
</html>
