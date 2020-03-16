<?php
// header("Content-type: text/html; charset=utf-8");
// header("Content-type: text/html; charset=gbk");
// 检测有没有仓库
// var_dump(extension_loaded('GD'));

// 通过header() 函数告诉浏览器，输出的是一个图像而不是文本或HTML，这样浏览器就可以正常显示图像了
header('Content-type:image/gif');
// readfile('q.png');
// 这个没打开

// 创建画布 宽度,高度 imageCreateTrueColor(width,height)
// 传入的两个参数分别为画布的宽和高，在绘图时超出宽高的部分将不予显示，且此尺寸即为生成图片文件时的尺寸。
// 返回值为资源类型
$res =  imageCreateTrueColor(500, 500);
// var_dump($res);
// 设置颜色  imageColorAllocate(img_resource,R,G,B)
$red = imageColorAllocate($res, 255, 0, 0);
$green = imageColorAllocate($res, 0, 255, 0);
$white = imageColorAllocate($res, 255, 255, 255);
//填充颜色 imageFill(img_resource,x,y,color)
imagefill($res, 0, 0, $white);
imagesetpixel($res, 250, 250, $red);
// 干扰点
# for ($i = 0; $i < 1000; $i++) {
#     # mt_rand(0,500) 随机0~500
#     imagesetpixel($res, mt_rand(0, 500), mt_rand(0, 500), $red);
# }
// 输入文本
//array imagettftext ( resource $image , float $size , float $angle , int $x , int $y , int $color , string $fontfile , string $text )
//参数说明：图像资源，字体尺寸，角度，第一个字符的基本点（大概是字符的左下角），Y 坐标（字体基线的位置），颜色 ，字体文件，文本字符串（UTF-8 编码）
$font = realpath('Cascadia.ttf');
$text = 'Yellow Sleepy';
$text_han = '我困了';
// echo mb_strlen($text_han, 'utf-8');
// echo mb_substr($text_han, 0, 1, 'utf-8');
// mb_strlen($text_han,'utf-8'); 把汉字输出出来
for ($i = 0; $i <  mb_strlen($text_han, 'utf-8'); $i++) {
    # $text[$i] 如果不处理还是乱码  需要 mb_substr($text, $i, 1, 'utf-8') 处理 变量,index,长度,格式
    imagettftext($res, 30, mt_rand(0, 30), 34 * $i, 200, $green, $font, mb_substr($text_han, $i, 1, 'utf-8'));
};
# die; 终止运行 

//strlen() , 字符串长度
# for ($i = 0; $i < strlen($text); $i++) {
#     imagettftext($res, 30, mt_rand(0, 30), 34 * $i, 200, $green, $font, $text[$i]);
# };


//输出图像 imagegif(img_resource[,filename])   
imagepng($res);
//保存图像 imagegif(img_resource[,filename])    同名会被覆盖
imagepng($res, '1.jpg');
// 清理这个图片资源,在浏览器 释放内存
imagedestroy($res);
