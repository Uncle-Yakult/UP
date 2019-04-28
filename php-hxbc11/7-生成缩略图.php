<?php
$dst = imagecreatetruecolor(200,200);   //创建一个真彩色的图像，支持多数颜色
//$bgcolor = imagecolorallocate($dst,255,0,0);
//imagefill($dst,0,0,$bgcolor);
$src = imagecreatefromjpeg('./4.jpg');
$width = imagesx($src);     //原图的宽度
$height = imagesx($src);    //原图的高度
//imagecopyresampled($dst,$src,0,0,0,0,200,200,$width,$height);   //将大图完整的生成缩略图
//imagecopyresampled($dst,$src,0,0,240,100,200,200,182,176);  //裁切
imagecopyresampled($dst,$src,10,10,240,100,180,180,182,176);    //缩略图按坐标摆放
header('content-type:image/png');
imagepng($dst);
imagedestroy($dst);
imagedestroy($src);