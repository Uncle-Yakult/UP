<?php
header("content-type:text/html;charset=UTF-8");
echo '<pre>';
// var_dump($_POST);
// sleep(10);
var_dump($_FILES);

// 指定文件上传的目录
$target = './uploads/' . $_FILES['image']['name'];
$result = move_uploaded_file($_FILES['image']['tmp_name'],$target);
if ($result) {
    echo '上传成功！';
}else {
    echo '上传失败！';
}