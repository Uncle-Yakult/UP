<?php
header("content-type:text/html;charset=UTF-8");

// 1、加载文件上传函数
include './upload.php';

// 2、确定文件上传函数的参数
$file = $_FILES['image'];
$allow = array('image/jpeg','image/png','image/gif');
$path = './uploads';
$maxsize = 524288;  //0.5M

// 3、调用文件上传函数
$result = upload($file, $allow, $error, $path, $maxsize);

// 4、判断文件是否上传成功
if ($result) {
    // 上传成功
    echo "文件上传成功，新的文件名叫：" , $result;
}else {
    // 上传失败
    echo $error;
    die;
}