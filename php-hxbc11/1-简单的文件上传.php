<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
if (isset($_POST['submit'])) {
    //iconv()防止中文的文件名乱码
    $path = './uploads/'.iconv('utf-8','gb2312',$_FILES['file']['name']);
    //文件上传
    if (move_uploaded_file($_FILES['file']['tmp_name'],$path))
        echo '上传成功';
    else
        echo '上传失败';
}
?>
<form method="post" enctype="multipart/form-data">
文件：<input type="file" name="file" />
<input type="submit" name="submit" value="上传" />
</form>
</body>
</html>