<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
    if (isset($_POST['button'])){
        $num=trim($_POST['num']);
        if ($num=='' || !is_numeric($num)){
            echo '请输入数字';
        }else{
            $num+=0;    //将字符串数字转成数字型
            if (is_int($num)){
                if ($num<0){
                    echo '请输入非负整数';
                }else{
                    if ($num==0){
                        echo '0!=1';
                    }else{
                        $result=1;
                        for ($i=1;$i<=$num;$i++){
                            $result*=$i;
                        }
                        echo "{$num}!={$result}";
                    }
                }
            }else{
                echo '您输入的不是整数';
            }
        }
    }
    ?>
    <form method="post" action="">
        请输入一个数：<input type="text" name="num"><br>
        <input type="submit" name="button" value="计算阶乘">
    </form>
    </body>
</html>
