<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
    header('content-type:text/html;charset=utf-8');
    $lang='ch';
    if ($lang=='ch')
        $fn=create_function('$name','echo\'你好\'.$name;');
    elseif($lang=='eng')
        $fn=create_function('$name','echo\'hello\'.$name;');
    $fn('李白');
    ?>
    </body>
</html>
