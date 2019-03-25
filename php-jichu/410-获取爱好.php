<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
if (isset($_POST['button'])){
    if (empty($_POST['hobby'])){
        echo '你太内向了';
    }else{
        $hobby=$_POST['hobby'];     //  获取爱好
        for ($i=0;$i<count($hobby);$i<$n; $i++){        //循环输出爱好
            echo $hobby[$i],'<br>';
        }
    }
}
?>
<form method="post" action="">
    爱好：
    <input type="checkbox" name="hobby[]" value="爬山">爬山
    <input type="checkbox" name="hobby[]" value="读书">读书
    <input type="checkbox" name="hobby[]" value="游泳">游泳<br>
    <input type="submit" name="button" value="提交">
</form>
</body>
</html>
