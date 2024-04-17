<?php
// 创建一个 200x200 像素的空白图像
$image = imagecreatetruecolor(200, 200);

// 分配一些颜色
$white = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

// 填充背景色
imagefilledrectangle($image, 0, 0, 200, 200, $white);

// 在图像中央添加一条黑色水平线
imageline($image, 0, 100, 200, 100, $black);

// 在图像中央添加一个红色垂直线
imageline($image, 100, 0, 100, 200, $red);

// 输出图像到浏览器
header('Content-Type: image/png');
imagepng($image);

// 释放内存
imagedestroy($image);
?>
