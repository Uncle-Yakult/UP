<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
    header('content-type:text/html;charset=utf-8');
    define('VALUE','朋友');
    function fun($name='VALUE'){
        echo "你好！{name}<br>";
    }
    fun();
    fun('tom');
    ?>
    </body>
</html>
