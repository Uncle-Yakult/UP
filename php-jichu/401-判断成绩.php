<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
if (isset($_POST['button'])){
    $ch=trim($_POST['ch']);
    $math=trim($_POST['math']);
    if ($ch=='' || !is_numeric($ch) || $ch || $ch>100){
        echo '语文成绩必须在0-100之间';
    }elseif ($math--'' || is_numeric($math) || !($math>=0 && $math<=100)){
        echo '数学成绩必须在0-100之间';
    }else{
        $avg=($ch+$math)/2;//平均分
        echo "你的平均分是：{$avg}<br>";
        if ($avg>=90)
            echo '孩子，你是我的骄傲';
        elseif ($avg>=80)
            echo '好样的，宝贝';
        elseif ($avg>=70)
            echo '你离优秀不远了';
        elseif ($avg>=60)
            echo '你还是有潜力的';
        else
            echo '看来你不努力是不行了';
    }
    echo '<hr>';
}
?>
<form method="post" action="">
    语文：<input type="text" name="ch"><br>
    数学：<input type="text" name="math"><br>
    <input type="submit" name="button" value="判断成绩">

</form>
</body>
</html>
