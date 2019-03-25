<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
    for ($i=1;$i<=100;$i++){
        if ($i%15==0)
            echo 'C','<br>';
        elseif($i%5==0)
            echo 'B','<br>';
        elseif ($i%3==0)
            echo 'A','<br>';
        else
            echo $i,'<br>';
    }
    ?>
    </body>
</html>
