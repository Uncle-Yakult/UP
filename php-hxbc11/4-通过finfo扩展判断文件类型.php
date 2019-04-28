<?php
$path = 'F:\wamp\apche\htdocs\aa/jpg';
$finfo = finfo_open(FILEINFO_MIME);      //创建一个finfo资源
finfo_file($finfo,$path);
echo $info;     //text/html;charset = us-ascii
$array = explode(',',$info);
echo $array[0];
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
</head>

<body>
<?php
if (isset($_POST['button'])) {
    $type_array = array('image/jpeg','image/gif','image/png');  //允许的MIME格式文件
    if (in_array($_FILES['image']['type'],$type_array))
        echo '允许上传';
    else {
        echo '不允许上传';
    }
}
?>

<form method="post" enctype="multipart/form-data">
    文件：<input type="file" name="image" />
    <input type="submit" name="button" value="上传" />
</form>
</body>
</html>