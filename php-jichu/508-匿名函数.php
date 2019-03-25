<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
    $fn=function($args){
        echo ($args);
    };
    var_dump($fn);  //object(Closure)#1 (1)
    echo '<br>';
    $fn('i am a boy!');     //i am a boy!
    ?>
    </body>
</html>
