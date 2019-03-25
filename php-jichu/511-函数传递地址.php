<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
    header('content-type:text/html;charset=utf-8');
    function fun(&$arg){
        $arg='this is a string';
    }
    $stu=array('tom','berry');
    fun($stu);
    var_dump($stu);
    ?>
    </body>
</html>
