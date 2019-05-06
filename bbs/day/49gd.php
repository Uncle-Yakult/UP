<?php

/**
 * GD图片的制作
 */

// 1、创建真彩色画布
$img = imagecreatetruecolor(200,800);

// 2、给画布分配颜色
$color = imagecolorallocate($img,255,255,255);

// 3、绘制文字
imagestring($img,5,58,32,'ITCAST_PHP',$color);

// 4、输出图片
// 设置响应头信息
header("Content-type:image/png");
// 清理数据缓冲区
ob_clean();
imagepng($img); //输出图片
imagepng($img, './itcast.png'); //保存图片

// 5、销毁图片（释放资源）
imagedestroy($img);