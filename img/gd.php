<?php
// 检测有没有仓库
// var_dump(extension_loaded('GD'));

// 通过header() 函数告诉浏览器，输出的是一个图像而不是文本或HTML，这样浏览器就可以正常显示图像了
header('Content-type:image/gif') ;
// readfile('q.png');
// 这个没打开

// 创建画布 宽度,高度 imageCreateTrueColor(width,height)
// 传入的两个参数分别为画布的宽和高，在绘图时超出宽高的部分将不予显示，且此尺寸即为生成图片文件时的尺寸。
// 返回值为资源类型
$res =  imageCreateTrueColor(500,500);
// var_dump($res);
// 设置颜色  imageColorAllocate(img_resource,R,G,B)
$red = imageColorAllocate($res,255,0,0);
$green = imageColorAllocate($res,0,255,0);
$white = imageColorAllocate($res,255,255,255);
//填充颜色 imageFill(img_resource,x,y,color)
imagefill($res, 0, 0, $red);

// #绘制矩形 (x1,y1)为左上角坐标， (x2,y2)为右下角坐标
    //绘制空心矩形 imageRectangle(img_res,x1,y1,x2,y2,color)
    //绘制填充好的实心矩形 imageFilledRectangle (img_res,x1,y1,x2,y2,color)
    imageRectangle($res,100,100,400,400,$green);

// #绘制圆形 (x,y)为圆心坐标。 w为宽度，h为高度
    //绘制空心圆形 imageEllipse(img_res,x,y,w,h,color)
    //绘制填充好的实心圆imageFilledEllipse(img_res,x,y,w,h,color)
    imageellipse($res, 250, 250, 100, 100, $green);

// #绘制线条 (x1,y1)为起始点坐标,(x2,y2)为结束点坐标
    //imageLine(img_res,x1,y1,x2,y2,color)
    imageline($res, 0, 0, 499, 499, $green);

// #绘制像素 (x1,y1)为点坐标
    //bool imagesetpixel ( resource $image , int $x , int $y , int $color )
    for ($i = 0; $i < 600; $i++) {
        imagesetpixel($res, mt_rand(0, 500), mt_rand(0, 500), $green);
    }

//输出图像 imagegif(img_resource[,filename])
imagepng($res);