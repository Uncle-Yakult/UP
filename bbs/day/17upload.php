<?php
header("content-type:text/html;charset=UTF-8");
// 验证文件
// 先验证系统错误
switch ($_FILES['image']['error']) {
    case 1 : die('上传失败！超出了文件限制的大小！');
    case 2 : die('上传失败！超出了浏览器规定的文件大小！');
    case 3 : die('上传失败，文件上传不完整！');
    case 4 : die('上传失败，请先选择要上传的文件！');
    case 6;
    case 7 : die('对不起，服务器繁忙，请稍后再试！');
}

// 1.2 再验证逻辑错误
// 1.2.1 验证文件的大小
if ($_FILES['image']['size'] > 1048576) {   //1MB
    // 超出了 自己业务逻辑所规定的大小
    die("上传失败，超出了文件限制的大小！");
}
// 1.2.2 验证文件的后缀名
$allow = array('image/jpeg','image/png','image/gif');
if (!in_array($_FILES['image']['type'],$allow)) {
    // 非法的文件类型
    echo "上传的文件的类型不正确，允许的类型有：",implode(',',$allow);
    die;
}

// 2 移动文件
$target = './uploads/' . $_FILES['image']['name'];
$result = move_uploaded_file($_FILES['image']['tmp_name'],$target);
if ($result) {
    echo '上传成功！';
}else {
    echo '上传失败！';
}