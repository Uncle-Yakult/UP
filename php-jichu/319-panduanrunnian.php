<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
    //判断是否按了提交按钮，方法一
if (isset($_POST['button'])){
    //按了提交按钮
}
    //判断是否按了提交按钮，方法二
if (!empty($_POST)){
    $year=trim($_POST['year']); //获取年份并去除两边的空格
    if ($year==''){
        echo '您没有输入年份';
    }else{
        if (is_numeric($year)){ //判断是否是数字或数字字符串
            $year+=0;   //将字符串转成数字型
            if (is_int($year)){
                if ($year>=0){
                    if ($year&4==0  && $year%100!=0 || $year%400==0)
                        echo "{$year}是闰年";
                    else
                        echo "{$year}是平年";
                }else{
                    echo '年份必须是正整数';
                }
            }else{
                echo '您输入的是小数';
            }
        }else{
            echo "您输入的不是数字";
        }
    }
}
?>
<form method="post" action="">
    请输入年份：<input type="text" name="year"><br>
    <input type="submit" name="button" value="判断闰年">
</form>
</body>
</html>
