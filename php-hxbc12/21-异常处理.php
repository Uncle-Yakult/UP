<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <tile></tile>
</head>
<?php
if (isset($_POST['button'])) {
    try {
        $age = $_POST['age'];
        if ($age>100)
            throw new Exception('年龄不能超过100');  //抛出异常对象
        echo "你的年龄是：{$age}<br>";
    }catch (Exception $e) {     //捕获异常
        echo $e -> getMessage();
    }
}
?>

<body>
<form method="post" action="">
    请输入年龄：<input type="text" name="age"><br />
    <input type="submit" name="button" value="提交">
</form>
</body>
</html>