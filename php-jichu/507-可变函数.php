 <?php
    header('content-type:text/html;charset=utf-8');
    function fun($args){
        echo $args;
    }
    $str='fun';//将函数的名字存储在变量中
    $str('锄禾日当午');
?>
